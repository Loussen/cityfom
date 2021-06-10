<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class OfferResource extends JsonResource
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
            'title' => (string) $this->title,
            'old_price' => $this->old_price,
            'price' => $this->price,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/channel_details/' . $this->image)) ? asset("/uploads/channel_details/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        if(isset($this->distance) && $this->distance > 0) {
            $arr['distance'] = sprintf("%.2f", $this->distance) . ' Km';
        }

        return $arr;
    }
}
