<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class NotificationResource extends JsonResource
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
            'user_id' => $this->user_id,
            'title' => $this->title,
            'message' => $this->message,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/push_notifications/' . $this->image)) ? asset("/uploads/push_notifications/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        return $arr;
    }
}
