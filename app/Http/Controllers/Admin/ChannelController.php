<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelRequest;
use App\Http\Requests\CouponRequest;
use App\Models\ChannelCategory;
use App\Models\Channels;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:channel-list|channel-create|channel-edit|channel-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:channel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:channel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:channel-delete', ['only' => ['destroy']]);
        $this->middleware('permission:channel-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduleName = $this->module_name;

        $query = DB::table('channels AS c')
            ->selectRaw('c.*, s.name AS s_name, cc.name AS c_name')
            ->leftJoin('channel_category as cc', 'cc.id','=','c.channel_category_id')
            ->join('stores AS s','s.id','=','c.store_id');

        $pageCount = config('global.pagination_count');

        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);
            $query->whereIn('s.id',$storeIds);
        }

        if(request('title')) {
            $query->whereRaw('c.title LIKE "%'.request('title').'%"');
        }

        if(request('category_id')) {
            $categoryId = intval(request('category_id'));

            if($categoryId > 0)
            {
                $categoryExists = ChannelCategory::find($categoryId);

                if($categoryExists)
                    $query->whereRaw('c.channel_category_id = '.$categoryId);
            }
        }

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('c.store_id = '.$storeId);
            }
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('c.status = '.$filterStatus);
        }

        $query->orderBy('c.created_at','DESC');

        $query = $query->paginate($pageCount);
        $channels = $query->appends(request()->query());

        if($moduleName == 'cms') {
            $stores = Stores::whereIn('id',$storeIds)->get();
        } else {
            $stores = Stores::all();
        }

        $categories = ChannelCategory::all();
        $status = config('global.status');

        return view('admin.pages.channel.index', compact('channels','stores','categories','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moduleName = $this->module_name;

        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);
            $stores = Stores::whereIn('id',$storeIds)->get();
        } else {
            $stores = Stores::all();
        }

        $categories = ChannelCategory::all();

        return view('admin.pages.channel.create',compact('stores','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ChannelRequest $request)
    {
        $imageName = null;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/channels/',$imageName);
            }
            else
            {
                return redirect()->route($this->module_name.'.channel.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $channelData = [
            'title' => $request->title,
            'channel_category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imageName,
            'reorder' => $request->reorder ?? 0,
        ];

        $moduleName = $this->module_name;

        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);

            if(in_array($request->store_id,$storeIds)) {
                $channelData['store_id'] = $request->store_id;
            } else {
                abort(404);
                exit;
            }
        } else {
            $channelData['store_id'] = $request->store_id;
        }

        Channels::create($channelData);

        return redirect()->route($this->module_name.'.channel.index')->with(_sessionmessage());
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
     * @param Channels $channel
     * @return \Illuminate\Http\Response
     */
    public function edit(Channels $channel)
    {
        $moduleName = $this->module_name;

        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);
            $stores = Stores::whereIn('id',$storeIds)->get();
        } else {
            $stores = Stores::all();
        }

        $categories = ChannelCategory::all();

        $channelPost = DB::table("channels_details")->where('channel_id',$channel->id)->first();

        if($channelPost === null) $existsPost = 'no'; else $existsPost = 'yes';

        return view('admin.pages.channel.edit', compact('channel','stores','categories','existsPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ChannelRequest $request, $id)
    {
        $channel = Channels::find($id);

        $imageName = $channel->image;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/channels/',$imageName);

                delete_old_files(public_path().'/uploads/channels/'.$channel->image);
            }
            else
            {
                return redirect()->route($this->module_name.'.channel.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $channelData = [
            'title' => $request->title,
            'store_id' => $request->store_id,
            'channel_category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imageName,
            'reorder' => $request->reorder ?? 0,
        ];

        $moduleName = $this->module_name;
        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);

            if(in_array($request->store_id,$storeIds)) {
                $channelData['store_id'] = $request->store_id;
            } else {
                abort(404);
                exit;
            }
        } else {
            $channelData['store_id'] = $request->store_id;
        }

        $channel->update($channelData);

        return redirect()->route($this->module_name.'.channel.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Channels $channel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Channels $channel)
    {
        $moduleName = $this->module_name;
        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);

            if(!in_array($channel->store_id,$storeIds)) {
                abort(404);
                exit;
            }
        }
        delete_old_files(public_path().'/uploads/channels/'.$channel->image);
        DB::table("channels_details")->where('channel_id',$channel->id)->delete();
        $channel->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleChannel(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        $moduleName = $this->module_name;

        foreach ($explodeIds as $id)
        {
            $channel = Channels::find($id);

            if($moduleName == 'cms') {
                $storeIds = get_cms_user_store_ids(Auth::user()->id);
                if(!in_array($channel->store_id,$storeIds)) {
                    abort(404);
                    exit;
                }
            }

            delete_old_files(public_path().'/uploads/channels/'.$channel->image);
        }

        DB::table("channels_details")->where('channel_id',$explodeIds)->delete();
        DB::table("channels")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleChannel(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            $moduleName = $this->module_name;

            foreach ($explodeIds as $id) {
                $channel = Channels::find($id);

                if($moduleName == 'cms') {
                    $storeIds = get_cms_user_store_ids(Auth::user()->id);
                    if(!in_array($channel->store_id,$storeIds)) {
                        abort(404);
                        exit;
                    }
                }
            }


            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("channels")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeChannelStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('channel_id')) {
            $status = intval($request->status);
            $channelId = intval($request->channel_id);

            if ($status > 0 && $channelId > 0) {
                $channel = Channels::find($channelId);

                $moduleName = $this->module_name;

                if($moduleName == 'cms') {
                    $storeIds = get_cms_user_store_ids(Auth::user()->id);

                    if(!in_array($channel->store_id,$storeIds)) {
                        abort(404);
                        exit;
                    }
                }

                $channelData = [
                    'status' => $status,
                ];

                $channel->update($channelData);

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
