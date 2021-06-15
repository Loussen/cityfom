<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class ChannelPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arr = [
            'id' => $this->id,
            'store_name' => ($this->store_name) ? $this->store_name : 'CityFom Store',
            'store_id' => $this->store_id,
            'description' => (string) $this->description,
//            'additional' => (string) $this->additional,
            'title' => (string) $this->title,
            'old_price' => $this->old_price,
            'price' => $this->price,
            'media' => (!empty($this->media) && File::exists(public_path() . '/uploads/channel_posts/' . $this->media)) ? asset("/uploads/channel_posts/" . $this->media) : asset("/uploads/default/no_image.png"),
        ];

        return $arr;
    }
}
