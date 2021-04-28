<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingReviewController extends Controller
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
        $query = DB::table('rate_reviews AS rr')
            ->selectRaw('rr.*, rr.id AS rate_review_id, sum((case when rl.review_id is not null then 1 else 0 end)) AS like_count, s.name AS store_name, au.firstname AS firstname, au.lastname AS lastname')
            ->leftJoin('review_likes as rl', 'rl.review_id','=','rr.id')
            ->leftJoin('app_users as au', 'au.id','=','rr.user_id')
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
        $stores = Stores::all();

        return view('admin.pages.coupon.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CouponRequest $request)
    {
        $imageName = null;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/coupons/',$imageName);
            }
            else
            {
                return redirect()->route('admin.coupon.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $validFromTo = $request->valid_from_to;
        $validExplode = explode("-",$validFromTo);
        $validFrom = date("Y-m-d", strtotime($validExplode[0]));
        $validTo = date("Y-m-d", strtotime($validExplode[1]));

        $couponData = [
            'title' => $request->title,
            'store_id' => $request->store_id,
            'description' => $request->description,
            'discount' => $request->discount,
            'image' => $imageName,
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
        ];

        $couponId = Coupons::insertGetId($couponData);

        if ($couponId > 0) {
            $generateCouponCode = $this->generatecouponcode();
            DB::table("coupons")->where('id','=',$couponId)
                ->update(['code' => $generateCouponCode.$couponId]);

            return redirect()->route('admin.coupon.index')->with(_sessionmessage());
        } else {
            return redirect()->route('admin.coupon.create')->with(_sessionmessage(null, "Coupon code cannot create", 'warning', true));
        }
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
     * @param Coupons $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupons $coupon)
    {
        $stores = Stores::all();

        return view('admin.pages.coupon.edit', compact('coupon','stores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CouponRequest $request, $id)
    {
        $coupon = Coupons::find($id);

        $imageName = $coupon->image;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/coupons/',$imageName);

                delete_old_files(public_path().'/uploads/coupons/'.$coupon->image);
            }
            else
            {
                return redirect()->route('admin.coupon.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $validFromTo = $request->valid_from_to;
        $validExplode = explode("-",$validFromTo);
        $validFrom = date("Y-m-d", strtotime($validExplode[0]));
        $validTo = date("Y-m-d", strtotime($validExplode[1]));

        $couponData = [
            'title' => $request->title,
            'store_id' => $request->store_id,
            'description' => $request->description,
            'discount' => $request->discount,
            'image' => $imageName,
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
        ];

        $coupon->update($couponData);

        return redirect()->route('admin.coupon.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupons $coupon
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Coupons $coupon)
    {
        delete_old_files(public_path().'/uploads/coupons/'.$coupon->image);
        $coupon->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleCoupon(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $coupon = Coupons::find($id);
            delete_old_files(public_path().'/uploads/coupons/'.$coupon->image);
        }

        DB::table("coupons")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleCoupon(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("coupons")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeCouponStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('coupon_id')) {
            $status = intval($request->status);
            $couponId = intval($request->coupon_id);

            if ($status > 0 && $couponId > 0) {
                $coupon = Coupons::find($couponId);

                $couponData = [
                    'status' => $status,
                ];

                $coupon->update($couponData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    protected function generatecouponcode()
    {
        $length = 6;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($p = 0; $p < $length; $p++) {
            $string .= $characters[mt_rand(0, strlen($characters))];
        }

        return $string;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
