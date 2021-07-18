<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class LoyaltyMessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $loyaltyMessageType = config('global.loyalty_message_type');

        $arr = [
            'id' => $this->id,
            'title' => $this->description,
            'points' => $this->points,
            'valid_from' => $this->valid_from,
            'valid_to' => $this->valid_to,
            'type' => $loyaltyMessageType[$this->type],
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/loyalty_messages/' . $this->image)) ? asset("/uploads/loyalty_messages/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        return $arr;
    }
}
