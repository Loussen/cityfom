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

        $user = Auth::user();

//        $getRating = DB::table('rate_reviews AS rr')
//            ->selectRaw("rr.*")
//            ->join('app_users AS au','au.id','=','rr.user_id')
//            ->whereRaw("rr.store_id = ".$this->store_id." AND rr.status = 1")
//            ->get();

        $getRating = DB::table('rate_reviews AS rr')
            ->selectRaw('rr.*, COUNT(rl.id) AS count_review_like, au.firstname, au.lastname, au.username, au.photo AS user_photo, rl2.id AS review_like_id, GROUP_CONCAT(rri.image) AS review_images')
            ->leftJoin('review_likes AS rl','rl.review_id','=','rr.id')
            ->join('app_users AS au','au.id','=','rr.user_id')
            ->leftJoin('rate_review_images AS rri','rri.rate_review_id','=','rr.id')
            ->leftJoin('review_likes AS rl2', function($join) use ($request) {
                $join->on('rl2.user_id', '=', 'rr.user_id');
                $join->on('rl2.review_id', '=', 'rr.id');
                $join->where('rl2.user_id','=',$request->user_id);
            })
            ->whereRaw('rr.store_id = '.$this->store_id.' AND rr.status = 1')
            ->groupBy('rr.id')
            ->get();

        $getLoyaltyMessage = DB::table('loyalty_messages AS lm')
            ->selectRaw("lm.id")
            ->whereRaw("lm.store_id = ".$this->store_id." AND lm.status = 1 AND UNIX_TIMESTAMP(lm.valid_to) >= ".strtotime(date('Y-m-d H:i:s')))
            ->first();

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

            $getRatingForUser = DB::table('rate_reviews AS rr')
                ->selectRaw("rr.rating")
                ->whereRaw("rr.store_id = ".$this->store_id." AND rr.user_id = " . $request->user_id . " AND rr.status = 1")
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

        if($this->special_days) {
            $specialDays = unserialize($this->special_days);

            foreach ($specialDays as $specialDay) {
                if($specialDay) {
                    $specialDayOne = explode("---",$specialDay);
                    $specialHoursOne = explode(";",$specialDayOne[0]);

                    $openingHoursArr['exceptions'][date('Y-m-d',strtotime($specialDayOne[1]))] = array_map('trim', $specialHoursOne);;
                }
            }
        }

        $openingHours = OpeningHours::create(
            $openingHoursArr
        );

        $now = new \DateTime('now');
        $range = $openingHours->currentOpenRange($now);

        $openingHoursForWeek = $openingHours->forWeek();

        $k = 0;
        $time = [];
        foreach ($openingHoursForWeek as $keyWeek => $valueWeek) {
            $time[$k]['day'] = $keyWeek;
            $time[$k]['time'] = $valueWeek."";

            $k++;
        }

        $exceptions = $openingHours->exceptions();

        $firstDay = date("Y-m-d", strtotime('sunday last week'));
        $lastDay = date("Y-m-d", strtotime('sunday this week'));
        foreach ($exceptions as $keyException => $valueException) {
            if($keyException > $firstDay && $keyException < $lastDay) {
                $time[date('w', strtotime($keyException)) - 1]['day'] = strtolower(date('l', strtotime($keyException)));
                $time[date('w', strtotime($keyException)) - 1]['time'] = $valueException . "";
            }
        }

        $openingHoursStore = $openingHours->isOpenAt(new \DateTime(date('Y-m-d H:i:s'))) == 1 ? 'Open ('.$range->start()." - ".$range->end().")" : 'Closed';

        $arrNew = [];

        $arr = [
            'id' => $this->store_id,
            'name' => $this->store_name,
            'description' => $this->store_description,
            'email' => $this->store_email,
            'website' => $this->store_website,
            'facebook' => $this->store_facebook,
            'twitter' => $this->store_twitter,
            'instagram' => $this->store_instagram,
            'latitude' => $this->store_latitude,
            'longitude' => $this->store_longitude,
            'address' => $this->address,
            'distance' => sprintf("%.2f", $this->distance) . ' Km',
            'categories' => $categoryArr,
            'rating' => $totalRating,
            'tags' => $this->tags,
            'availability' => $openingHoursStore,
            'availability_text' => $openingHoursStore,
            'availability_timing' => $time,
            'review_count' => $getRating->count(),
            'type' => $this->store_type == 1 ? true : false,
            'phone' => $this->store_phone,
            'favourite' => (isset($getFavourite) && $getFavourite) ? true : false,
            'rating_status' => (isset($getRatingForUser) && $getRatingForUser) ? 2 : 1,
            'loyalty_message' => (isset($getLoyaltyMessage) && $getLoyaltyMessage) ? true : false,
            'review_rating' => RatingReviewResource::collection($getRating),
        ];

        $storeImages = explode(",",$this->store_images);
        $storeImages = array_unique($storeImages);

        foreach ($storeImages as $storeImage) {
            $arr['images'][] = (!empty($storeImage) && File::exists(public_path() . '/uploads/stores/' . $storeImage)) ? asset("/uploads/stores/" . $storeImage) : null;
        }

        if($request->user_open_store === true) {
            if($arr['availability'] == "Open") {
                $arrNew[] = $arr;
            }
        } else {
            $arrNew[] = $arr;
        }

        return $arrNew;
    }
}
