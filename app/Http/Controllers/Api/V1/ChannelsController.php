<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\ChannelResource;
use App\Models\Channels;
use Illuminate\Http\Request;

class ChannelsController extends ApiController
{
    /**
     * All by store ID api
     *
     * @return \Illuminate\Http\Response
     */
    public function allByStoreId(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getChannels = Channels::where('status',config("global.enable"))->where('store_id',$validatedData['store_id'])->orderBy('reorder','ASC')->get();

        if ($getChannels) {

            $responseData = ChannelResource::collection($getChannels);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Channels not found', 404);
    }

}
