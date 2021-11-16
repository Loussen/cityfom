<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralMessageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:general-messages-list|general-messages-create|general-messages-edit|general-messages-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:general-messages-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:general-messages-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:general-messages-delete', ['only' => ['destroy']]);
        $this->middleware('permission:general-messages-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('general_message')
            ->selectRaw('general_message.*');

        $pageCount = config('global.pagination_count');

        if(request('title')) {
                $query->whereRaw('subject_en LIKE "%'.request('title').'%" OR subject_az LIKE "%'.request('title').'%" OR subject_es LIKE "%'.request('title').'%" OR subject_ru LIKE "%'.request('title').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        $query = $query->paginate($pageCount);
        $generalMessages = $query->appends(request()->query());

        $status = config('global.status');

        return view('admin.pages.general_message.index', compact('generalMessages','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.general_message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/general_message/',$imageName);
            }
            else
            {
                return redirect()->route($this->module_name.'.general_message.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $generalMessageData = [
            'subject_en' => $request->subject_en,
            'subject_az' => $request->subject_az,
            'subject_ru' => $request->subject_ru,
            'subject_es' => $request->subject_es,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
            'image' => $imageName,
        ];

        GeneralMessage::create($generalMessageData);

        return redirect()->route($this->module_name.'.general_message.index')->with(_sessionmessage());
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
     * @param GeneralMessage $generalMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralMessage $generalMessage)
    {
        return view('admin.pages.general_message.edit', compact('generalMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $generalMessage = GeneralMessage::find($id);

        $imageName = $generalMessage->image;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/general_message/',$imageName);

                delete_old_files(public_path().'/uploads/general_message/'.$generalMessage->image);
            }
            else
            {
                return redirect()->route($this->module_name.'.general_message.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $generalMessageData = [
            'subject_en' => $request->subject_en,
            'subject_az' => $request->subject_az,
            'subject_ru' => $request->subject_ru,
            'subject_es' => $request->subject_es,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
            'image' => $imageName,
        ];

        $generalMessage->update($generalMessageData);

        return redirect()->route($this->module_name.'.general_message.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param GeneralMessage $generalMessage
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(GeneralMessage $generalMessage)
    {
        delete_old_files(public_path().'/uploads/general_message/'.$generalMessage->image);
        $generalMessage->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleGeneralMessage(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $generalMessage = GeneralMessage::find($id);
            delete_old_files(public_path().'/uploads/general_message/'.$generalMessage->image);
        }

        DB::table("general_message")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleGeneralMessage(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("general_message")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeGeneralMessageStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('general_message_id')) {
            $status = intval($request->status);
            $generalMessageId = intval($request->general_message_id);

            if ($status > 0 && $generalMessageId > 0) {
                $generalMessage = GeneralMessage::find($generalMessageId);

                $generalMessageData = [
                    'status' => $status,
                ];

                $generalMessage->update($generalMessageData);

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
