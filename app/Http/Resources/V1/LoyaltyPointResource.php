<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class LoyaltyPointResource extends JsonResource
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
            'store_id' => $this->store_id,
            'current_points' => $this->current,
            'previous_points' => $this->previous,
            'created_at' => $this->created_at,
        ];

        return $arr;
    }
}
