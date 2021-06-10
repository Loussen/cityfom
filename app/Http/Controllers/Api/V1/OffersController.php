<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\OfferResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffersController extends ApiController
{
    /**
     * Get offers all api
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

        if($request->has('latitude') && $request->has('longitude'))
        {
            $latitude = $request->latitude;
            $longitude = $request->longitude;

            $getOfferPromote = DB::table('stores AS s')
                ->selectRaw('s.id AS store_id, s.name AS store_name, cd.old_price, cd.price, cd.radius AS channel_radius, cd.id AS id, cd.title, cd.media as image, ( 6371 * acos( cos( radians('.$latitude.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$longitude.') ) + sin( radians('.$latitude.') ) * sin( radians( latitude ) ) ) ) AS distance')
                ->join('channels AS c','c.store_id','=','s.id')
                ->join('channels_details AS cd','cd.channel_id','=','c.id')
                ->whereRaw("s.verified = ".config("global.enable")." AND s.status = ".config("global.enable")." AND c.status = ".config("global.enable")." AND cd.status = ".config("global.enable")." AND c.channel_category_id = ".config("global.channel_offer_id")." AND cd.expiration_date >= ".(strtotime(date('Y-m-d')) * 1000)." AND cd.publication_date <= ".(strtotime(date('Y-m-d')) * 1000)." AND UNIX_TIMESTAMP(cd.start_date_promote) <= ".strtotime(date('Y-m-d H:i'))." AND UNIX_TIMESTAMP(cd.end_date_promote) >= ".strtotime(date('Y-m-d H:i')))
                ->havingRaw('distance <= channel_radius / 1000')
                ->orderBy('distance','ASC')
                ->get();

            if($getOfferPromote->count() > 0)
            {
                $responseData['promoteOffers'] = OfferResource::collection($getOfferPromote);
            }
        }

        $getOffers = DB::table('channels_details AS cd')
                    ->selectRaw('cd.*, s.id AS store_id, s.name AS store_name')
                    ->join('channels AS c','c.id','=','cd.channel_id')
                    ->join('stores AS s','s.id','=','c.store_id')
                    ->where('cd.status',config("global.enable"))
                    ->where('cd.publication_date','<=',strtotime(date('Y-m-d')) * 1000)
                    ->where('cd.expiration_date','>=',strtotime(date('Y-m-d')) * 1000)
                    ->where('c.status',config("global.enable"))
                    ->where('c.channel_category_id','=',config("global.channel_offer_id"))
                    ->where('s.status',config("global.enable"))
                    ->where('s.verified',config("global.enable"))
                    ->offset($validatedData['offset'])
                    ->limit($limit)
                    ->orderBy('cd.reorder','ASC')
                    ->get();

        if ($getOffers->count() > 0 || $getOfferPromote->count() > 0) {
            $responseData['offerList'] = OfferResource::collection($getOffers);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Offer not found', 404);
    }

    /**
     * Get offer detail api
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
            'offer_id' => 'required|numeric|exists:channels_details,id',
        ]);

        $getOffer = DB::table('channels_details AS cd')
            ->selectRaw('cd.*, s.id AS store_id, s.name AS store_name')
            ->join('channels AS c','c.id','=','cd.channel_id')
            ->join('stores AS s','c.store_id','=','s.id')
            ->where('cd.status',config("global.enable"))
            ->where('cd.publication_date','<=',strtotime(date('Y-m-d')) * 1000)
            ->where('cd.expiration_date','>=',strtotime(date('Y-m-d')) * 1000)
            ->where('c.status',config("global.enable"))
            ->where('c.channel_category_id','=',config("global.channel_offer_id"))
            ->where('s.status',config("global.enable"))
            ->where('s.verified',config("global.enable"))
            ->where('cd.id','=',$validatedData['offer_id'])
            ->first();

        if($getOffer) {
            $offerDetail = new OfferResource($getOffer);

            return $this->successResponse($offerDetail);
        }

        return $this->errorResponse('Offer not found', 404);
    }
}
