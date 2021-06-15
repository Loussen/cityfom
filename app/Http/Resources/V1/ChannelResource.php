<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;

class ChannelResource extends JsonResource
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
            'title' => $this->title,
            'image' => (!empty($this->image) && File::exists(public_path() . '/uploads/channels/' . $this->image)) ? asset("/uploads/channels/" . $this->image) : asset("/uploads/default/no_image.png"),
        ];

        return $arr;
    }
}
