<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Spatie\OpeningHours\OpeningHours;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $getCategories = DB::table('categories AS c')
            ->selectRaw("c.name_".$request->language." AS category_name,c.id AS category_id, c.icon AS category_images")
            ->leftJoin('store_category AS sc','sc.category_id','=','c.id')
            ->whereRaw("sc.store_id = ".$this->store_id)
            ->get();

        $categoryArr = [];
        $i = 0;
        foreach ($getCategories as $category) {
            $categoryArr[$i]['id'] = $category->category_id;
            $categoryArr[$i]['name'] = $category->category_name;
            $categoryArr[$i]['image'] = (!empty($category->category_images) && File::exists(public_path() . '/uploads/categories/' . $category->category_images)) ? asset("/uploads/categories/" . $category->category_images) : null;

            $i++;
        }

        $getRating = DB::table('rate_reviews AS rr')
            ->selectRaw("rr.rating")
            ->whereRaw("rr.store_id = ".$this->store_id." AND rr.status = 1")
            ->get();

        $totalRating = "0.0";

        if ($getRating->count() > 0) {
            foreach ($getRating as $rating) {
                $totalRating += $rating->rating;
            }

            $totalRating = sprintf("%.1f", $totalRating / $getRating->count());
        }

        if(isset($request->user_id) && $request->user_id > 0) {
            $getFavourite = DB::table('favourites AS f')
                ->selectRaw("f.id")
                ->whereRaw("f.user_id = " . $request->user_id . " AND f.store_id = ".$this->store_id)
                ->first();
        }

        $openingHoursArr = [];
        if($this->opening_hours) {
            $openingHours = unserialize($this->opening_hours);

            $weekdays = config('global.weekdays');

            foreach ($weekdays as $keyWeekday => $valueWeekday) {
                if(trim($openingHours[$keyWeekday-1]) != '-')
                {
                    $openingHoursOne = explode(";",$openingHours[$keyWeekday-1]);

                    $openingHoursArr[strtolower($valueWeekday)] = $openingHoursOne;
                }
                else
                    $openingHoursArr[strtolower($valueWeekday)] = [];
            }
        }

//        dd(serialize($openingHoursArr));

        $openingHours = OpeningHours::create(
            $openingHoursArr
        );

        echo $this->store_id." - ".$openingHours->isOpenAt(new \DateTime(date('Y-m-d H:i:s')))."<br />";

//        $openingHoursStore = $openingHours->isOpenAt(new \DateTime('2021-06-28 16:00:00')) == 1 ? 'Open' : 'Closed';

        $arr = [
            'id' => $this->store_id,
            'name' => $this->store_name,
            'address' => $this->address,
            'distance' => sprintf("%.2f", $this->distance) . ' Km',
            'categories' => $categoryArr,
            'rating' => $totalRating,
//            'availability' => $openingHoursStore,
            'availability_text' => '',
            'review_count' => $getRating->count(),
            'type' => $this->store_type == 1 ? true : false,
            'phone' => $this->store_phone,
            'favourite' => (isset($getFavourite) && $getFavourite) ? true : false
        ];

        $storeImages = explode(",",$this->store_images);

        foreach ($storeImages as $storeImage) {
            $arr['images'][] = (!empty($storeImage) && File::exists(public_path() . '/uploads/stores/' . $storeImage)) ? asset("/uploads/stores/" . $storeImage) : null;
        }

        return $arr;
    }
}
