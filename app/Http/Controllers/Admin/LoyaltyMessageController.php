<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoyaltyMessageRequest;
use App\Models\LoyaltyMessages;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoyaltyMessageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:loyalty-messages-list|loyalty-messages-create|loyalty-messages-edit|loyalty-messages-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:loyalty-messages-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:loyalty-messages-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:loyalty-messages-delete', ['only' => ['destroy']]);
        $this->middleware('permission:loyalty-messages-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('loyalty_messages AS lm')
            ->selectRaw('lm.*, s.name AS s_name')
            ->join('stores AS s','s.id','=','lm.store_id');

        $pageCount = config('global.pagination_count');

        if(request('description')) {
            $query->whereRaw('lm.description LIKE "%'.request('description').'%"');
        }

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('lm.store_id = '.$storeId);
            }
        }

        if(request('type') && in_array(request('type'),[1,2])) {
            $filterType = intval(request('type'));

            if($filterType > 0)
                $query->whereRaw('lm.type = '.$filterType);
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('lm.status = '.$filterStatus);
        }

        $query = $query->paginate($pageCount);
        $loyaltyMessages = $query->appends(request()->query());

        $stores = Stores::all();
        $status = config('global.status');
        $loyaltyMessageType = config('global.loyalty_message_type');

        return view('admin.pages.loyalty_message.index', compact('loyaltyMessages','stores','loyaltyMessageType','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Stores::all();
        $loyaltyMessageType = config('global.loyalty_message_type');

        return view('admin.pages.loyalty_message.create',compact('stores','loyaltyMessageType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoyaltyMessageRequest $request)
    {
        $imageName = null;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/loyalty_messages/',$imageName);
            }
            else
            {
                return redirect()->route($this->module_name.'.loyalty_message.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $validFromTo = $request->valid_from_to;
        $validExplode = explode("-",$validFromTo);
        $validFrom = date("Y-m-d", strtotime($validExplode[0]));
        $validTo = date("Y-m-d", strtotime($validExplode[1]));

        $loyaltyMessageData = [
            'type' => $request->type,
            'store_id' => $request->store_id,
            'points' => $request->points,
            'description' => $request->description,
            'image' => $imageName,
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
        ];

        LoyaltyMessages::create($loyaltyMessageData);

        return redirect()->route($this->module_name.'.loyalty_message.index')->with(_sessionmessage());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param LoyaltyMessages $loyaltyMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(LoyaltyMessages $loyaltyMessage)
    {
        $stores = Stores::all();
        $loyaltyMessageType = config('global.loyalty_message_type');

        return view('admin.pages.loyalty_message.edit', compact('loyaltyMessage','stores','loyaltyMessageType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LoyaltyMessageRequest $request, $id)
    {
        $loyaltyMessage = LoyaltyMessages::find($id);

        $imageName = $loyaltyMessage->image;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/loyalty_messages/',$imageName);

                delete_old_files(public_path().'/uploads/loyalty_messages/'.$loyaltyMessage->image);
            }
            else
            {
                return redirect()->route($this->module_name.'.loyalty_message.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $validFromTo = $request->valid_from_to;
        $validExplode = explode("-",$validFromTo);
        $validFrom = date("Y-m-d", strtotime($validExplode[0]));
        $validTo = date("Y-m-d", strtotime($validExplode[1]));

        $loyaltyMessageData = [
            'type' => $request->type,
            'store_id' => $request->store_id,
            'points' => $request->points,
            'description' => $request->description,
            'image' => $imageName,
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
        ];

        $loyaltyMessage->update($loyaltyMessageData);

        return redirect()->route($this->module_name.'.loyalty_message.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LoyaltyMessages $loyaltyMessage
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LoyaltyMessages $loyaltyMessage)
    {
        delete_old_files(public_path().'/uploads/loyalty_messages/'.$loyaltyMessage->image);
        $loyaltyMessage->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleLoyaltyMessage(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $loyaltyMessage = LoyaltyMessages::find($id);
            delete_old_files(public_path().'/uploads/loyalty_messages/'.$loyaltyMessage->image);
        }

        DB::table("loyalty_messages")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleLoyaltyMessage(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("loyalty_messages")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeLoyaltyMessageStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('loyalty_message_id')) {
            $status = intval($request->status);
            $loyaltyMessageId = intval($request->loyalty_message_id);

            if ($status > 0 && $loyaltyMessageId > 0) {
                $loyaltyMessage = LoyaltyMessages::find($loyaltyMessageId);

                $loyaltyMessageData = [
                    'status' => $status,
                ];

                $loyaltyMessage->update($loyaltyMessageData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
