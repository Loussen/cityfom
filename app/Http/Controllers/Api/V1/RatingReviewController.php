<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\RatingReviewResource;
use App\Models\NotificationsStore;
use App\Models\NotificationsStoreUsers;
use App\Models\RateReviewImages;
use App\Models\RateReviews;
use App\Models\ReviewLikes;
use Cake\Network\Email\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RatingReviewController extends ApiController
{
    /**
     * store api
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

    /**
     * All list by store api
     *
     * @return \Illuminate\Http\Response
     */
    public function allByStoreId(Request $request)
    {
        $langs = config("global.langs");
        $ratingSort = config("global.rating_sort");
        $ratingReviewStatus = config('global.rating_review_status');

        $ratingReviewStatus = array_flip($ratingReviewStatus);

        $user = Auth::user();

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'sort' => 'sometimes|string|in:' . implode(",", $ratingSort),
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $sortingColumn = 'count_review_like';
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
            ->selectRaw('rr.*, COUNT(rl.id) AS count_review_like, au.firstname, au.lastname, au.username, au.photo AS user_photo, rl2.id AS review_like_id, GROUP_CONCAT(rri.image) AS review_images')
            ->leftJoin('review_likes AS rl','rl.review_id','=','rr.id')
            ->join('app_users AS au','au.id','=','rr.user_id')
            ->leftJoin('rate_review_images AS rri','rri.rate_review_id','=','rr.id')
            ->leftJoin('review_likes AS rl2', function($join) use ($user) {
                $join->on('rl2.user_id', '=', 'rr.user_id');
                $join->on('rl2.review_id', '=', 'rr.id');
                $join->where('rl2.user_id','=',$user->id);
            })
            ->whereRaw('rr.store_id = '.$validatedData['store_id'].' AND rr.status = '.$ratingReviewStatus['Accept'])
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('rr.id')
            ->orderBy($sortingColumn,$sortingType)
            ->get();

        if($getRatingReview->count() > 0) {
            $responseData = RatingReviewResource::collection($getRatingReview);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Rating review not found', 404);
    }

    /**
     * All list by user api
     *
     * @return \Illuminate\Http\Response
     */
    public function allByUserId(Request $request)
    {
        $langs = config("global.langs");
        $ratingSort = config("global.rating_sort");
        $ratingReviewStatus = config('global.rating_review_status');

        $ratingReviewStatus = array_flip($ratingReviewStatus);

        $user = Auth::user();

        $validatedData = $request->validate([
            'sort' => 'sometimes|string|in:' . implode(",", $ratingSort),
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $sortingColumn = 'count_review_like';
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
            ->selectRaw('rr.*, COUNT(rl.id) AS count_review_like, au.firstname, au.lastname, au.username, au.photo AS user_photo, rl2.id AS review_like_id, GROUP_CONCAT(rri.image) AS review_images')
            ->leftJoin('review_likes AS rl','rl.review_id','=','rr.id')
            ->join('app_users AS au','au.id','=','rr.user_id')
            ->leftJoin('rate_review_images AS rri','rri.rate_review_id','=','rr.id')
            ->leftJoin('review_likes AS rl2', function($join) use ($user) {
                $join->on('rl2.user_id', '=', 'rr.user_id');
                $join->on('rl2.review_id', '=', 'rr.id');
                $join->where('rl2.user_id','=',$user->id);
            })
            ->whereRaw('rr.user_id = '.$user->id.' AND rr.status = '.$ratingReviewStatus['Accept'])
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('rr.id')
            ->orderBy($sortingColumn,$sortingType)
            ->get();

        if($getRatingReview->count() > 0) {
            $responseData = RatingReviewResource::collection($getRatingReview);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Rating review not found', 404);
    }

    /**
     * Like review api
     *
     * @return \Illuminate\Http\Response
     */
    public function likeReview(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'review_id' => 'required|numeric|exists:rate_reviews,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getExistsLiker = ReviewLikes::where('user_id',$user->id)->where('review_id',$validatedData['review_id'])->first();

        if($getExistsLiker) {
            $getExistsLiker->delete();

            $likeType = 2;
        } else {
            $likeReviewData = [
                'user_id' => $user->id,
                'review_id' => $validatedData['review_id'],
            ];

            ReviewLikes::create($likeReviewData);

            $likeType = 1;
        }

        return $this->successResponse(null,$likeType == 1 ? 'Like added successfully.' : 'Like removed successfully.');

    }

}
