<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\Categories;
use App\Models\Channels;
use App\Models\Configs;
use App\Models\LoyaltyPoints;
use App\Models\StoreCategory;
use App\Models\StoreImages;
use App\Models\Stores;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Session;

class CmsController
{
    /**
     * CMS auth function
     *
     * @return \Illuminate\Http\Response
     */
    public function auth()
    {
        $cmsUsername = Configs::where('slug', 'cms_username')->first();
        $cmsPassword = Configs::where('slug', 'cms_password')->first();

        $cmsData["username"] = $cmsUsername->value;
        $cmsData["password"] = $cmsPassword->value;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/auth",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($cmsData),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                "cache-control: no-cache"
            ),
        ));

        $responseAuth = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $jsonData = json_decode($responseAuth);

        if (json_last_error() === JSON_ERROR_NONE) {
            Session::flush('CMSAUTH');
        } else {
            Session::put('CMSAUTH', $responseAuth);
        }

    }

    public function userIdData()
    {
        $cmsUserResponse = 0;

        $cmsAuth = $this->getCmsAuth();

        if (!empty($cmsAuth)) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/loyalty/users",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $cmsAuth,
                    "Content-Type: application/json",
                    "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                    "cache-control: no-cache"
                ),
            ));

            $cmsUserResponse = curl_exec($curl);
            $cmsUserError = curl_error($curl);

            curl_close($curl);
        }

        return $cmsUserResponse;
    }

    public function storeData()
    {
        $cmsAuth = $this->getCmsAuth();

        if (!empty($cmsAuth)) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/organizations",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $cmsAuth,
                    "Content-Type: application/json",
                    "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                    "cache-control: no-cache"
                ),
            ));

            $storeDataRes = curl_exec($curl);
            $storeDataErr = curl_error($curl);

            curl_close($curl);

            if ($storeDataErr) {
                exit;
            } else {
                $storeDetails = json_decode($storeDataRes);

                $storeIds = [];

                if (count($storeDetails) > 0) {
                    foreach ($storeDetails as $key => $store) {
                        $storeCatArr = [];
                        $i = 0;
                        if (isset($store->activities) && count($store->activities) > 0) {
                            if ($i <= 2) {
                                foreach ($store->activities as $catKey => $category) {
                                    $categoryData = Categories::where('cms_category_id', $category)->first();
                                    $storeCatArr[] = !empty($categoryData) ? strval($categoryData->category_id) : "0";
                                }
                            }
                            $i++;
                        }

                        $storeAddress = (!empty($store->address->streetNumber) ? $store->address->streetNumber . ', ' : '') . (!empty($store->address->street) ? $store->address->street . ', ' : '') . (!empty($store->address->city) ? $store->address->city . ', ' : '') . (!empty($store->address->zipCode) ? $store->address->zipCode . ', ' : '') . (!empty($store->address->country->name) ? $store->address->country->name : '');

                        $storeExistData = Stores::where('cms_store_id', $store->id)->where('name', $store->name)->where('description', $store->description)->where('address', $storeAddress)->where('country', $store->address->country->name)->where('latitude', $store->address->latitude)->where('longitude', $store->address->longitude)->where('email', $store->contactDetails->email)->where('phone', $store->contactDetails->phoneNumber)->where('website', $store->website)->first();

                        $storeIds[$key] = $store->id;

                        if (empty($storeExistData)) {
                            $storeData = Stores::where('cms_store_id', $store->id)->first();

                            if (!empty($storeData)) {
                                $updateStoreData['name'] = $store->name;
                                $updateStoreData['description'] = $store->description;
                                $updateStoreData['address'] = $storeAddress;
                                $updateStoreData['country'] = $store->address->country->name;
                                $updateStoreData['latitude'] = $store->address->latitude;
                                $updateStoreData['longitude'] = $store->address->longitude;
                                $updateStoreData['email'] = $store->contactDetails->email;
                                $updateStoreData['phone'] = $store->contactDetails->phoneNumber;
                                $updateStoreData['website'] = $store->website;
                                $updateStoreData['cms_notification_id'] = !empty($store->notificationsChannelId) ? $store->notificationsChannelId : 0;

                                $storeData->update($updateStoreData);

                                StoreCategory::where('store_id', $storeData->id)->delete();

                                foreach ($storeCatArr as $category) {
                                    $categoryNewData = [
                                        'store_id' => $storeData->id,
                                        'category_id' => $category
                                    ];

                                    StoreCategory::create($categoryNewData);
                                }

                                unset($updateStoreData);
                            } else {

                                $storeNewData = [
                                    'cms_store_id' => $store->id,
                                    'name' => $store->name,
                                    'description' => $store->description,
                                    'address' => $storeAddress,
                                    'country' => $store->address->country->name,
                                    'latitude' => $store->address->latitude,
                                    'longitude' => $store->address->longitude,
                                    'email' => $store->contactDetails->email,
                                    'phone' => $store->contactDetails->phoneNumber,
                                    'website' => $store->website,
                                    'cms_notification_id' => !empty($store->notificationsChannelId) ? $store->notificationsChannelId : 0,
                                    'status' => config('global.disable'),
                                    'verified' => config('global.disable')
                                ];

                                $newStore = Stores::create($storeNewData);

                                foreach ($storeCatArr as $category) {
                                    $categoryNewData = [
                                        'store_id' => $newStore->id,
                                        'category_id' => $category
                                    ];

                                    StoreCategory::create($categoryNewData);
                                }

                                if (!empty($store->frontendResources->mobileBackgroundUrl)) {
                                    try {
                                        $storeImg = file_get_contents($store->frontendResources->mobileBackgroundUrl);
                                        $imgSave = rand();
                                        file_put_contents(public_path() . '/uploads/stores/' . $imgSave, $storeImg);

                                        $storeImage[] = $imgSave;

                                        foreach ($storeImage as $image) {
                                            $imageData = [
                                                'store_id' => $newStore->id,
                                                'image' => $image,
                                            ];

                                            StoreImages::create($imageData);
                                        }
                                    } catch (\Exception $ex) {
                                        // Image error
                                    }
                                }

                                unset($storeNewData);
                            }
                        }
                    }

                    if (count($storeIds) > 0) {
                        Stores::whereNotIn('cms_store_id', $storeIds)->where('cms_store_id', '!=', 0)->delete();
                    }
                }
            }
        }
    }

    public function userLoyaltyPointData($userId)
    {
        $loyaltyPointData = [];

        $cmsAuth = $this->getCmsAuth();

        if (!empty($cmsAuth)) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/loyalty/users/" . $userId . "/points",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $cmsAuth,
                    "Content-Type: application/json",
                    "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                    "cache-control: no-cache"
                ),
            ));

            $loyaltyPointRes = curl_exec($curl);
            $loyaltyPointErr = curl_error($curl);

            curl_close($curl);

            if ($loyaltyPointErr) {
                exit;
            } else {
                $loyaltyPointData = json_decode($loyaltyPointRes);
            }
        }

        return $loyaltyPointData;
    }

    public function userLoyaltyPointHistoryData($userId = null, $storeId = null)
    {
        $cmsAuth = $this->getCmsAuth();

        if (!empty($cmsAuth)) {
            $getUser = AppUsers::find($userId);

            $getStore = Stores::find($storeId);

            if ((isset($getUser->cms_user_id) && !empty($getUser->cms_user_id)) && (isset($getStore->cms_store_id) && !empty($getStore->cms_store_id))) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/loyalty/organizations/" . $storeData->cms_store_id . "/users/" . $userData->cms_user_id . "/points/history",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_POSTFIELDS => "",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: " . $cmsAuth,
                        "Content-Type: application/json",
                        "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                        "cache-control: no-cache"
                    ),
                ));

                $loyaltyPointHistoryRes = curl_exec($curl);
                $loyaltyPointHistoryErr = curl_error($curl);

                curl_close($curl);

                if ($loyaltyPointHistoryErr) {
                    exit;
                } else {
                    $userLoyaltyPointHistoryData = json_decode($loyaltyPointHistoryRes);

                    if (count($userLoyaltyPointHistoryData) > 0) {
                        foreach ($userLoyaltyPointHistoryData as $key => $loyaltyPointHistory) {
                            $loyaltyPointHistoryData = LoyaltyPoints::where('user_id', $userId)->where('store_id', $storeId)->where('previous', $loyaltyPointHistory->previousPoints)->where('current', $loyaltyPointHistory->currentPoints)->where('UNIX_TIMESTAMP(created_at)', $loyaltyPointHistory->timestamp / 1000)->first();

                            if (!empty($loyaltyPointHistoryData)) {
                                $updateLoyaltyPointHistoryData['previous_points'] = $loyaltyPointHistory->previousPoints;
                                $updateLoyaltyPointHistoryData['current_points'] = $loyaltyPointHistory->currentPoints;

                                $loyaltyPointHistoryData->update($updateLoyaltyPointHistoryData);

                                unset($updateLoyaltyPointHistoryData);
                            } else {
                                $newLoyaltyPointHistoryData = [
                                    'user_id' => $userId,
                                    'store_id' => $storeId,
                                    'previous' => $loyaltyPointHistory->previousPoints,
                                    'current' => $loyaltyPointHistory->currentPoints,
                                ];

                                LoyaltyPoints::create($newLoyaltyPointHistoryData);

                                unset($newLoyaltyPointHistoryData);
                            }
                        }
                    }
                }
            }
        }
    }

    public function channelsData($storeId = null)
    {
        $cmsAuth = $this->getCmsAuth();

        if (!empty($cmsAuth)) {
            $getStore = Stores::find($storeId);

            if(!empty($getStore)) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/organizations/" . $getStore->cms_store_id . "/channels",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_POSTFIELDS => "",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: " . $cmsAuth,
                        "Content-Type: application/json",
                        "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                        "cache-control: no-cache"
                    ),
                ));

                $storeChannelDataRes = curl_exec($curl);
                $storeChannelDataErr = curl_error($curl);

                curl_close($curl);

                if ($storeChannelDataErr) {
                    exit;
                } else {
                    $storeChannelDetails = json_decode($storeChannelDataRes);

                    $storeChannelIds = [];

                    if(count($storeChannelDetails) > 0) {
                        foreach ($storeChannelDetails as $key => $storeChannel) {
                            $storeChannelExistData = Channels::where('cms_channel_id',$storeChannel->id)->first();

                            $storeChannelIds[$key] = $storeChannel->id;

                            if (!empty($storeChannelExistData)) {
                                $updateStoreChannelData['title'] = strip_tags($storeChannel->title);
                                $updateStoreChannelData['category'] = strip_tags($storeChannel->category);
                                $updateStoreChannelData['channel_order'] = $storeChannel->order;
                                $updateStoreChannelData['updated_at'] = date('Y-m-d h:i:s');

                                $storeChannelExistData->update($updateStoreChannelData);

                                unset($updateStoreChannelData);
                            } else {
                                $newStoreChannelArr['cms_channel_id'] = $storeChannel->id;
                                $newStoreChannelArr['store_id'] = $storeId;
                                $newStoreChannelArr['title'] = strip_tags($storeChannel->title);
                                $newStoreChannelArr['channel_category_id'] = strip_tags($storeChannel->category);
                                $newStoreChannelArr['reorder'] = $storeChannel->order;
                                $newStoreChannelArr['status'] = 1;
                                $newStoreChannelArr['created_at'] = $newStoreChannelArr['updated_at'] = date('Y-m-d h:i:s');

                                Channels::create($newStoreChannelArr);

                                unset($newStoreChannelArr);
                            }
                        }

                        if (count($storeChannelIds) > 0) {
                            Channels::whereNotIn('cms_channel_id', $storeChannelIds)->where('store_id', $storeId)->delete();
                        }
                    }
                }
            }
        }
    }

    protected function getCmsAuth()
    {
        $cmsAuthCheck = (Session::has('CMSAUTH')) ? Session::get('CMSAUTH') : "";

        if (empty($cmsAuthCheck)) {
            $this->auth();
        }

        $cmsAuth = (Session::has('CMSAUTH')) ? Session::get('CMSAUTH') : "";

        return $cmsAuth;
    }

}
