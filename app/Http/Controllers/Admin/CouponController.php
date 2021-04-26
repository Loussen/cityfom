<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
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
        $query = DB::table('coupons AS c')
            ->selectRaw('c.*, sum((case when cr.coupon_id is not null then 1 else 0 end)) AS redeem_count, s.name AS s_name')
            ->leftJoin('coupon_redeem as cr', 'cr.coupon_id','=','c.id')
            ->join('stores AS s','s.id','=','c.store_id')
            ->groupByRaw('c.id');

        $pageCount = config('global.pagination_count');

        if(request('id')) {
            $filterId = intval(request('id'));

            if($filterId > 0)
                $query->whereRaw('c.id = '.request('id'));
        }

        if(request('title')) {
            $query->whereRaw('c.title LIKE "%'.request('title').'%"');
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
                $query->whereRaw('c.status = '.request('status'));
        }

        $redeemCount = 'ASC';
        if(request('redeem_count') && in_array(request('redeem_count'),['ASC','DESC'])) {
            $query->orderBy('redeem_count',request('redeem_count'));

            $redeemCount = request('redeem_count');
        }

        $query = $query->paginate($pageCount);
        $coupons = $query->appends(request()->query());

        $stores = Stores::all();
        $status = config('global.status');

        return view('admin.pages.coupon.index', compact('coupons','stores','redeemCount','status'));
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
