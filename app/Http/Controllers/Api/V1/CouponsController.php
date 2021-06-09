<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\CouponRequest;
use App\Http\Resources\V1\CouponResource;
use App\Models\CmsPages;
use App\Models\Coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponsController extends ApiController
{
    /**
     * Get page all api
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
            'offset' => 'sometimes|numeric',
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $getCoupon = DB::table('coupons AS c')->selectRaw('c.*, s.name AS store_name, 1 AS distance')->join('stores AS s','c.store_id','=','s.id')->where('c.status',config("global.enable"))->where('c.valid_to','>',date('Y-m-d'))->where('c.valid_from','<=',date('Y-m-d'))->offset($validatedData['offset'])->limit($limit)->orderBy('c.id','DESC')->get();

        if ($getCoupon->count() > 0) {
            $responseData['couponList'] = CouponResource::collection($getCoupon);

            if($request->has('latitude') && $request->has('longitude'))
            {
                $latitude = $request->latitude;
                $longitude = $request->longitude;

                $getCouponPromote = DB::table('stores AS s')->selectRaw('*, c.id as c_id, c.title as c_title, c.image as c_image, ( 6371 * acos( cos( radians('.$latitude.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$longitude.') ) + sin( radians('.$latitude.') ) * sin( radians( latitude ) ) ) ) as distance, s.name AS store_name')->join('coupons AS c','c.store_id','=','s.id')->whereRaw("1 having distance <= c.radius/1000 AND s.verified = 1 AND s.status = 1 AND c.status = 1 AND valid_from <= NOW() AND valid_to >= NOW() AND UNIX_TIMESTAMP(c.start_date_promote) <= ".strtotime(date('Y-m-d H:i'))." AND UNIX_TIMESTAMP(c.end_date_promote) >= ".strtotime(date('Y-m-d H:i')))->orderBy('distance','ASC')->get();

//                echo $getCouponPromote;

                if($getCouponPromote->count() > 0)
                {
                    $responseData['promoteCoupons'] = CouponResource::collection($getCouponPromote);
                }
            }


            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Coupon not found', 404);
    }

    /**
     * Coupon detail function
     *
     * @return \Illuminate\Http\Response
     */
    protected function couponDetails()
    {

    }
}
