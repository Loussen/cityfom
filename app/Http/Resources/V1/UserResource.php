<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arr = parent::toArray($request);

        $arr['photo'] = (!empty($arr['photo']) && File::exists(public_path() . '/uploads/user_images/' . $arr['photo'])) ? asset("/uploads/user_images/" . $arr['photo']) : asset("/uploads/default/profile_picture.png");
        return $arr;
    }
}
