<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\RateReviewImages;
use App\Models\RateReviews;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingReviewController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:rating-reviews-list|rating-reviews-create|rating-reviews-edit|rating-reviews-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:rating-reviews-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:rating-reviews-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:rating-reviews-delete', ['only' => ['destroy']]);
        $this->middleware('permission:rating-reviews-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('rate_reviews AS rr')
            ->selectRaw('rr.*, rr.id AS rate_review_id, sum((case when rl.review_id is not null then 1 else 0 end)) AS like_count, s.name AS store_name, au.firstname AS firstname, au.lastname AS lastname, au.email, GROUP_CONCAT(rri.image SEPARATOR ",") AS rate_review_images')
            ->leftJoin('review_likes as rl', 'rl.review_id','=','rr.id')
            ->leftJoin('app_users as au', 'au.id','=','rr.user_id')
            ->leftJoin('rate_review_images as rri', 'rri.rate_review_id','=','rr.id')
            ->join('stores AS s','s.id','=','rr.store_id')
            ->groupByRaw('rr.id');

        $pageCount = config('global.pagination_count');

        if(request('review')) {
            $query->whereRaw('rr.review LIKE "%'.request('review').'%"');
        }

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('rr.store_id = '.$storeId);
            }
        }

        if(request('user_id')) {
            $userId = intval(request('user_id'));

            if($userId > 0) {
                $userExists = AppUsers::find($userId);

                if($userExists)
                    $query->whereRaw('rr.user_id = '.$userId);
            }
        }

        if(request('status') && in_array(request('status'),[1,2,3])) {
            $status = intval(request('status'));

            if($status > 0)
                $query->whereRaw('rr.status = '.request('status'));
        }

        $likeCount = 'ASC';
        if(request('like_count') && in_array(request('like_count'),['ASC','DESC'])) {
            $query->orderBy('like_count',request('like_count'));

            $likeCount = request('like_count');
        }

        $query = $query->paginate($pageCount);
        $ratingReviews = $query->appends(request()->query());

        $stores = Stores::all();
        $ratingReviewstatus = config('global.rating_review_status');

        return view('admin.pages.rating_review.index', compact('ratingReviews','stores','ratingReviewstatus','likeCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route($this->module_name.'.rating_review.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        return redirect()->route($this->module_name.'.rating_review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rateReview = DB::table('rate_reviews AS rr')
            ->selectRaw('rr.*, rr.id AS rate_review_id, rr.comment, sum((case when rl.review_id is not null then 1 else 0 end)) AS like_count, s.name AS store_name, au.firstname AS firstname, au.lastname AS lastname, GROUP_CONCAT(rri.image SEPARATOR ",") AS rate_review_images, GROUP_CONCAT(rri.id SEPARATOR ",") AS rate_review_image_id')
            ->leftJoin('review_likes as rl', 'rl.review_id','=','rr.id')
            ->leftJoin('app_users as au', 'au.id','=','rr.user_id')
            ->leftJoin('rate_review_images as rri', 'rri.rate_review_id','=','rr.id')
            ->join('stores AS s','s.id','=','rr.store_id')
            ->where('rr.id','=',$id)
            ->groupByRaw('rr.id')->first();

        return view('admin.pages.rating_review.show', compact('rateReview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RateReviews $rateReview
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return redirect()->route($this->module_name.'.rating_review.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        return redirect()->route($this->module_name.'.rating_review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RateReviews $ratingReview
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(RateReviews $ratingReview)
    {
        $images = RateReviewImages::where('rate_review_id',$ratingReview->id)->get();

        foreach ($images as $image)
        {
            delete_old_files(public_path().'/uploads/rating_reviews/'.$image['image']);
        }

        DB::table("rate_reviews")->where('id',$ratingReview->id)->delete();
        DB::table("rate_review_images")->where('rate_review_id',$ratingReview->id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleRatingReview(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $images = RateReviewImages::where('rate_review_id',$id)->get();

            foreach ($images as $image)
            {
                delete_old_files(public_path().'/uploads/rating_reviews/'.$image['image']);
            }
        }

        DB::table("rate_review_images")->whereIn('rate_review_id',$explodeIds)->delete();
        DB::table("rate_reviews")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function destroyImage(Request $request)
    {
        $imageId = $request->image_id;

        $image = RateReviewImages::where('id',$imageId)->first();

        delete_old_files(public_path().'/uploads/rating_reviews/'.$image->image);

        $image->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleRatingReview(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("rate_reviews")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeRatingReviewStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('rate_review_id')) {
            $status = intval($request->status);
            $rateReviewId = intval($request->rate_review_id);

            if ($status > 0 && $rateReviewId > 0) {
                $rateReview = RateReviews::find($rateReviewId);

                $rateReviewData = [
                    'status' => $status,
                ];

                $rateReview->update($rateReviewData);

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
