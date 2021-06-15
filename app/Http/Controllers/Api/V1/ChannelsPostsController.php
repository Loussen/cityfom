<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\ChannelPostResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelsPostsController extends ApiController
{
    /**
     * All by store ID api
     *
     * @return \Illuminate\Http\Response
     */
    public function allByChannelId(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'channel_id' => 'required|numeric|exists:channels,id',
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $getChannelsPosts = DB::table('channels_details AS cd')
            ->selectRaw('cd.*, s.id AS store_id, s.name AS store_name')
            ->join('channels AS c','c.id','=','cd.channel_id')
            ->join('stores AS s','s.id','=','c.store_id')
            ->where('cd.status',config("global.enable"))
            ->where('cd.publication_date','<=',strtotime(date('Y-m-d')) * 1000)
            ->where('cd.expiration_date','>=',strtotime(date('Y-m-d')) * 1000)
            ->where('c.status',config("global.enable"))
            ->where('s.status',config("global.enable"))
            ->where('s.verified',config("global.enable"))
            ->where('cd.channel_id',$validatedData['channel_id'])
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->orderBy('cd.reorder','ASC')
            ->get();

        if ($getChannelsPosts) {

            $responseData = ChannelPostResource::collection($getChannelsPosts);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Channels not found', 404);
    }

    /**
     * Channel detail api
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'channel_detail_id' => 'required|numeric|exists:channels_details,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getChannelsPost = DB::table('channels_details AS cd')
            ->selectRaw('cd.*, s.id AS store_id, s.name AS store_name')
            ->join('channels AS c','c.id','=','cd.channel_id')
            ->join('stores AS s','s.id','=','c.store_id')
            ->where('cd.status',config("global.enable"))
            ->where('cd.publication_date','<=',strtotime(date('Y-m-d')) * 1000)
            ->where('cd.expiration_date','>=',strtotime(date('Y-m-d')) * 1000)
            ->where('c.status',config("global.enable"))
            ->where('s.status',config("global.enable"))
            ->where('s.verified',config("global.enable"))
            ->where('cd.id',$validatedData['channel_detail_id'])
            ->first();

        if ($getChannelsPost) {

            $responseData = new ChannelPostResource($getChannelsPost);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Channels not found', 404);
    }

}
