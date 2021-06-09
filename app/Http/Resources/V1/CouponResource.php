<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class CouponResource extends JsonResource
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
            'discount' => (string) $this->discount,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/coupons/' . $this->image)) ? asset("/uploads/coupons/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        if($this->distance > 1) {
            $arr['distance'] = sprintf("%.2f", $this->distance) . ' Km';
        }

        return [
            'id' => $this->id,
            'store_name' => ($this->store_name) ? $this->store_name : 'CityFom Store',
            'store_id' => $this->store_id,
            'title' => (string) $this->title,
            'discount' => (string) $this->discount,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/coupons/' . $this->image)) ? asset("/uploads/coupons/" . $this->image) : asset("/uploads/default/no_image.png"),
            'distance' => sprintf("%.2f", $this->distance) . ' Km'
        ];
    }
}
