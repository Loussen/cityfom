<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\RatingReviewResource;
use App\Models\NotificationsStore;
use App\Models\NotificationsStoreUsers;
use App\Models\RateReviewImages;
use App\Models\RateReviews;
use Cake\Network\Email\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingReviewController extends ApiController
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'user_id' => 'required|numeric|exists:app_users,id',
            'store_id' => 'required|numeric|exists:stores,id',
            'ratings' => 'required|numeric',
            'reviews' => 'sometimes|string|min:3',
            'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,jpg,png',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $rateReviewData = [
            'user_id' => $validatedData['user_id'],
            'store_id' => $validatedData['store_id'],
            'rating' => $validatedData['ratings'],
            'review' => $request->has('reviews') ? $validatedData['reviews'] : '',
            'status' => (!empty($validatedData['reviews'])) ? 1 : 2,
        ];

        $rateReview = RateReviews::create($rateReviewData);

        $allowedfileExtension = ['jpeg','jpg','png'];

        if($request->hasfile('image'))
        {
            foreach ($request->file('image') as $file) {

                $extension = $file->getClientOriginalExtension();

                $check = in_array($extension,$allowedfileExtension);

                if($check) {

                    $imageName = mt_rand() . "_" .$file->getClientOriginalName();
                        $file->move(public_path('uploads/rating_reviews'), $imageName);

                        $ratingReviewImage = new RateReviewImages();
                        $ratingReviewImage->image = $imageName;
                        $ratingReviewImage->rate_review_id = $rateReview->id;
                        $ratingReviewImage->save();

                } else {
                    return $this->errorResponse('Error image format',422);
                }
            }
        }


        $notificationStoreData = [
            'store_id' => $validatedData['store_id'],
            'inserted_by'  => $validatedData['user_id'],
            'type'  => 2,
        ];

        $notificationStore = NotificationsStore::create($notificationStoreData);

        $getStoreUsers = DB::table('cms_users')->whereRaw('FIND_IN_SET(\'' . $validatedData['store_id'] . '\',store_ids)')->get();

        if($getStoreUsers) {
            foreach ($getStoreUsers as $users) {
                $notificationStoreUsersData = [
                    'notification_id' => $notificationStore->id,
                    'user_id' => $users->id
                ];

                NotificationsStoreUsers::create($notificationStoreUsersData);
            }
        }

        return $this->successResponse(null);
    }

    public function all(Request $request)
    {
        $langs = config("global.langs");
        $ratingSort = config("global.rating_sort");

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'sort' => 'sometimes|string|in:' . implode(",", $ratingSort),
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $sortingColumn = 'count_review';
        $sortingType = 'DESC';

        if ($request->has('sort')) {
            $sortParam = $request->has('sort');

            if ($sortParam == 'date') {
                $sortingColumn = 'created';
                $sortingType = 'DESC';
            } elseif ($sortParam == 'rate_desc') {
                $sortingColumn = 'ratings';
                $sortingType = 'DESC';
            } elseif ($sortParam == 'rate_asc') {
                $sortingColumn = 'ratings';
                $sortingType = 'ASC';
            } elseif ($sortParam == 'like_desc') {
                $sortingColumn = 'count_review';
                $sortingType = 'DESC';
            }
        }

        $getRatingReview = DB::table('rate_reviews AS rr')
            ->selectRaw('rr.*, COUNT(rl.id) AS count_review')
            ->leftJoin('review_likes AS rl','rl.review_id','=','rr.id')
            ->whereRaw('rr.store_id = '.$validatedData['store_id'].' AND rr.status = '.config('global.rating_review_status'))
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('rr.id')
            ->orderBy($sortingColumn,$sortingType)
            ->get();

        if($getRatingReview->count() > 0) {
            $responseData['couponList'] = RatingReviewResource::collection($getRatingReview);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Rating review not found', 404);
    }

}
