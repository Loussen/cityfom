<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class RatingReviewResource extends JsonResource
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
            'description' => (string) $this->description,
            'coupon_code' => (string) $this->code,
            'discount' => (string) $this->discount,
            'valid_to' => $this->valid_to,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/coupons/' . $this->image)) ? asset("/uploads/coupons/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        if(isset($this->distance) && $this->distance > 0) {
            $arr['distance'] = sprintf("%.2f", $this->distance) . ' Km';
        }

        if(isset($this->redeem_exists)) {
            $arr['user_redeem_coupon'] = $this->redeem_exists;
        }

        return $arr;
    }
}
