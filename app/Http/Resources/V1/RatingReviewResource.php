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
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'user_photo' => (!empty($this->user_photo) && File::exists(public_path() . '/uploads/user_images/' . $this->user_photo)) ? asset("/uploads/user_images/" . $this->user_photo) : asset("/uploads/default/profile_picture.png"),
            'rating' => (int) $this->rating,
            'review' => (string) $this->review,
            'comment' => (string) $this->comment,
            'date' => (string) date('d m Y',strtotime($this->created_at)),
            'count_review_like' => (int) $this->count_review_like,
            'user_like_check' => ($this->review_like_id > 0) ? true : false,
        ];

        $reviewImages = explode(",",$this->review_images);

        foreach ($reviewImages as $reviewImage) {
            $arr['images'][] = (!empty($reviewImage) && File::exists(public_path() . '/uploads/rating_reviews/' . $reviewImage)) ? asset("/uploads/rating_reviews/" . $reviewImage) : null;
        }

        return $arr;
    }
}
