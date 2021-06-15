<?php

namespace App\Http\Resources\V1;

use App\Models\AppUsers;
use App\Models\UserSearch;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $filter = false;

        if($request->has('user_id')) {
            $userId = intval($request->user_id);

            $getUserSearch = UserSearch::where('user_id',$userId)->first();

            $userCategorySearch = unserialize($getUserSearch->category);

            foreach ($userCategorySearch as $categorySearch) {
                if($this->id == $categorySearch) {
                    $filter = true;
                }
            }
        }

        $arr = [
            'id' => $this->id,
            'name' => $this->name,
            'image' => (!empty($this->icon) && File::exists(public_path() . '/uploads/categories/' . $this->icon)) ? asset("/uploads/categories/" . $this->icon) : asset("/uploads/default/no_image.png"),
            'recommended' => $this->filter == 1 ? true : false,
            'filter' => $filter,
        ];

        return $arr;
    }
}
