<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelPostRequest;
use App\Models\ChannelCategory;
use App\Models\ChannelsDetails;
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
        $radius = radius_promote();

        return view('admin.pages.channel_post.create',compact('stores','radius'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ChannelPostRequest $request)
    {
        $mediaName = $mediaMimeType = null;
        if($request->hasFile('media') && $request->media != '') {
            $media = $request->file('media');
            $mediaName = time()."_".$media->getClientOriginalName();

            $mediaMimeType = $media->getMimeType();

            $mediaType = explode(".",$mediaName);
            $mediaType = end($mediaType);

            if(in_array(strtolower($mediaType),['jpg','jpeg','png']))
            {
                $media->move(public_path().'/uploads/channel_posts/',$mediaName);
            }
            elseif(in_array(strtolower($mediaType),["mpeg", "mov", "wav", "avi", "dat", "flv", "3gp", "m4v", "mp4"]))
            {
                $mediaName = time().".mp4";

                exec("ffmpeg -i " . $media->getPathname() . " -vcodec copy -acodec copy " . public_path() . "uploads/channel_posts/" . $mediaName, $out);
            }
            else
            {
                return redirect()->route('admin.channel_post.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png,mpeg,mov,wav,avi,dat,flv,3gp,m4v,mp4)", 'warning', true));
            }
        }

        $channelAndCategoryId = $request->channel_id;
        $channelAndCategoryIdExplode = explode("-",$channelAndCategoryId);
        $channelId = $channelAndCategoryIdExplode[0];
        $categoryId = $channelAndCategoryIdExplode[1];

        $additionalText = $price = $oldPrice = '';
        $radius = 0;
        $startPromote = $endPromote = NULL;
        if(in_array($categoryId,[4,5,6]))
        {
            $additionalText = $request->additional_text;
        }
        elseif($categoryId == 3)
        {
            $price = $request->new_price;
            $oldPrice = $request->old_price;

            if($request->radius > 0) {
                $radius = intval($request->radius);
                $startEndPromote = $request->start_end_promote;
                $dateExplode = explode("-",$startEndPromote);
                $startPromote = date("Y-m-d", strtotime($dateExplode[0]));
                $endPromote = date("Y-m-d", strtotime($dateExplode[1]));
            }
        }
        elseif(in_array($categoryId,[1,2]))
        {
            $price = $request->price;
        }

        $publicExpireDate = $request->public_expire_date;
        $publicExpireExplode = explode("-",$publicExpireDate);
        $publicDate = strtotime($publicExpireExplode[0]) * 1000;
        $expireDate = strtotime($publicExpireExplode[1]) * 1000;

        $channelPostData = [
            'channel_id' => $channelId,
            'title' => $request->title,
            'description' => $request->description,
            'additional' => $additionalText,
            'media' => $mediaName,
            'format' => $mediaMimeType,
            'price' => $price,
            'old_price' => $oldPrice,
            'publication_date' => $publicDate,
            'expiration_date' => $expireDate,
            'start_date_promote' => $startPromote,
            'end_date_promote' => $endPromote,
            'radius' => $radius,
            'reorder' => $request->reorder ?? 0,
        ];

        ChannelsDetails::create($channelPostData);

        return redirect()->route('admin.channel_post.index')->with(_sessionmessage());
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
     * @param ChannelsDetails $channelPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ChannelsDetails $channelPost)
    {
        $stores = Stores::all();
        $radius = radius_promote();

        $selectedStore = \Illuminate\Support\Facades\DB::table('channels_details AS cd')
            ->join('channels AS c', 'c.id', '=', 'cd.channel_id')
            ->join('stores AS s', 's.id', '=', 'c.store_id')
            ->whereRaw('cd.id = ' . $channelPost->id)
            ->select('s.id AS store_id')
            ->first();

        return view('admin.pages.channel_post.edit', compact('stores','channelPost','selectedStore','radius'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ChannelPostRequest $request, $id)
    {
        $channelPost = ChannelsDetails::find($id);

        $mediaName = $mediaMimeType = null;
        if($request->hasFile('media') && $request->media != '') {
            $media = $request->file('media');
            $mediaName = time()."_".$media->getClientOriginalName();

            $mediaMimeType = $media->getMimeType();

            $mediaType = explode(".",$mediaName);
            $mediaType = end($mediaType);

            if(in_array(strtolower($mediaType),['jpg','jpeg','png']))
            {
                $media->move(public_path().'/uploads/channel_posts/',$mediaName);

                delete_old_files(public_path().'/uploads/channel_posts/'.$channelPost->media);
            }
            elseif(in_array(strtolower($mediaType),["mpeg", "mov", "wav", "avi", "dat", "flv", "3gp", "m4v", "mp4"]))
            {
                $mediaName = time().".mp4";

                exec("ffmpeg -i " . $media->getPathname() . " -vcodec copy -acodec copy " . public_path() . "uploads/channel_posts/" . $mediaName, $out);

                delete_old_files(public_path().'/uploads/channel_posts/'.$channelPost->media);
            }
            else
            {
                return redirect()->route('admin.channel_post.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png,mpeg,mov,wav,avi,dat,flv,3gp,m4v,mp4)", 'warning', true));
            }
        }

        $channelAndCategoryId = $request->channel_id;
        $channelAndCategoryIdExplode = explode("-",$channelAndCategoryId);
        $channelId = $channelAndCategoryIdExplode[0];
        $categoryId = $channelAndCategoryIdExplode[1];

        $additionalText = $price = $oldPrice = '';
        $radius = 0;
        $startPromote = $endPromote = NULL;
        if(in_array($categoryId,[4,5,6]))
        {
            $additionalText = $request->additional_text;
        }
        elseif($categoryId == 3)
        {
            $price = $request->new_price;
            $oldPrice = $request->old_price;

            if($request->radius > 0) {
                $radius = intval($request->radius);
                $startEndPromote = $request->start_end_promote;
                $dateExplode = explode("-",$startEndPromote);
                $startPromote = date("Y-m-d", strtotime($dateExplode[0]));
                $endPromote = date("Y-m-d", strtotime($dateExplode[1]));
            }
        }
        elseif(in_array($categoryId,[1,2]))
        {
            $price = $request->price;
        }

        $publicExpireDate = $request->public_expire_date;
        $publicExpireExplode = explode("-",$publicExpireDate);
        $publicDate = strtotime($publicExpireExplode[0]) * 1000;
        $expireDate = strtotime($publicExpireExplode[1]) * 1000;

        $channelPostData = [
            'channel_id' => $channelId,
            'title' => $request->title,
            'description' => $request->description,
            'additional' => $additionalText,
            'media' => $mediaName,
            'format' => $mediaMimeType,
            'price' => $price,
            'old_price' => $oldPrice,
            'publication_date' => $publicDate,
            'expiration_date' => $expireDate,
            'start_date_promote' => $startPromote,
            'end_date_promote' => $endPromote,
            'radius' => $radius,
            'reorder' => $request->reorder ?? 0,
        ];

        $channelPost->update($channelPostData);

        return redirect()->route('admin.channel_post.index')->with(_sessionmessage());
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
