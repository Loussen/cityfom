<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelPostRequest;
use App\Http\Requests\ChannelRequest;
use App\Http\Requests\CouponRequest;
use App\Models\ChannelCategory;
use App\Models\Channels;
use App\Models\ChannelsDetails;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelPostController extends Controller
{
    public function __construct()
    {
//        $this->middleware('permission:school-list|school-create|school-edit|school-delete', ['only' => ['index', 'store']]);
//        $this->middleware('permission:school-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:school-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:school-delete', ['only' => ['destroy']]);
//        $this->middleware('permission:school-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('channels_details AS cd')
            ->selectRaw('cd.*, s.name AS s_name, cc.name AS c_name, cd.title AS title_post, c.title AS title_channel')
            ->leftJoin('channels as c', 'c.id','=','cd.channel_id')
            ->leftJoin('channel_category as cc', 'cc.id','=','c.channel_category_id')
            ->join('stores AS s','s.id','=','c.store_id');

        $pageCount = config('global.pagination_count');

        if(request('title')) {
            $query->whereRaw('cd.title LIKE "%'.request('title').'%"');
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
                $query->whereRaw('cd.status = '.$filterStatus);
        }

        $query->orderBy('cd.created_at','DESC');

        $query = $query->paginate($pageCount);
        $channelPosts = $query->appends(request()->query());

        $stores = Stores::all();
        $categories = ChannelCategory::all();
        $status = config('global.status');

        return view('admin.pages.channel_post.index', compact('channelPosts','stores','categories','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Stores::all();

        return view('admin.pages.channel_post.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ChannelPostRequest $request)
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
                return redirect()->route('admin.channel.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
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

        Channels::create($channelData);

        return redirect()->route('admin.channel.index')->with(_sessionmessage());
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
        $stores = Stores::all();
        $categories = ChannelCategory::all();

        return view('admin.pages.channel.edit', compact('channel','stores','categories'));
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
                return redirect()->route('admin.channel.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
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

        $channel->update($channelData);

        return redirect()->route('admin.channel.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ChannelsDetails $channelPost
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ChannelsDetails $channelPost)
    {
        delete_old_files(public_path().'/uploads/channel_posts/'.$channelPost->media);
        $channelPost->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleChannelPost(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $channelPost = ChannelsDetails::find($id);
            delete_old_files(public_path().'/uploads/channel_posts/'.$channelPost->media);
        }

        DB::table("channels_details")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleChannelPost(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("channels_details")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeChannelPostStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('channel_post_id')) {
            $status = intval($request->status);
            $channelPostId = intval($request->channel_post_id);

            if ($status > 0 && $channelPostId > 0) {
                $channelPost = ChannelsDetails::find($channelPostId);

                $channelPostData = [
                    'status' => $status,
                ];

                $channelPost->update($channelPostData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    // Ajax request for get channel categories by store id
    public function channelCategoryFilter(Request $request)
    {
        $response = [];

        $search = $request->q;

        if ($request->has('store_id')) {
            $storeId = intval($request->store_id);
            if ($storeId > 0) {
                $channels = DB::table('channels AS c')
                    ->join('channel_category AS cc', 'cc.id', '=','c.channel_category_id')
                    ->whereRaw('c.store_id = '.$storeId)
                    ->select('c.id AS channel_id','c.title AS channel_title', 'cc.name AS category_name', 'cc.id AS category_id');
            }

            if ($request->has('q')) {
                $channels->whereRaw('(c.title LIKE "%' . $search . '%" OR cc.name LIKE "%'.$search.'%")');
            }

            $channels = $channels->get();
        }

        if ($channels) {
            $response = $channels;
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
