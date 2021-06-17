<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\Categories;
use App\Models\Channels;
use App\Models\ChannelsDetails;
use App\Models\Configs;
use App\Models\Favourites;
use App\Models\LoyaltyPoints;
use App\Models\PushNotifications;
use App\Models\StoreCategory;
use App\Models\StoreImages;
use App\Models\Stores;
use App\Models\UserCategory;
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

    public function channelsDetailData($channelId = null, $cmsChannelId = null)
    {
        $cmsAuth = $this->getCmsAuth();

        if(!empty($cmsAuth)) {
            if(!empty($channelId) && !empty($cmsChannelId)) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/channels/" . $cmsChannelId . "/posts",
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

                $storeChannelDetailDataRes = curl_exec($curl);
                $storeChannelDetailDataErr = curl_error($curl);

                curl_close($curl);

                if ($storeChannelDetailDataErr) {
                    exit;
                } else {
                    $storeChannelDetailsData = json_decode($storeChannelDetailDataRes);

                    $storeChannelDetailIds = [];

                    if (count($storeChannelDetailsData) > 0) {
                        foreach ($storeChannelDetailsData as $key => $storeChannelDetail) {
                            $storeChannelDetailExistData = ChannelsDetails::where(['cms_channel_detail_id' => $storeChannelDetail->id])->first();

                            $storeChannelDetailIds[$key] = $storeChannelDetail->id;

                            if (!empty($storeChannelDetailExistData)) {
                                $updateStoreChannelDetailData['title'] = strip_tags($storeChannelDetail->title);
                                $updateStoreChannelDetailData['description'] = strip_tags($storeChannelDetail->description);
                                $updateStoreChannelDetailData['cms_image_url'] = (isset($storeChannelDetail->attachment->url) && !empty($storeChannelDetail->attachment->url)) ? $storeChannelDetail->attachment->url : '';

                                if (isset($storeChannelDetail->additionalFields) && count($storeChannelDetail->additionalFields) > 0) {
                                    foreach ($storeChannelDetail->additionalFields as $key1 => $additionalFieldData) {
                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'oldprice')) {
                                            $updateStoreChannelDetailData['old_price'] = strip_tags($additionalFieldData->value);
                                        }

                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'newprice')) {
                                            $updateStoreChannelDetailData['price'] = strip_tags($additionalFieldData->value);
                                        }

                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'price')) {
                                            $updateStoreChannelDetailData['price'] = strip_tags($additionalFieldData->value);
                                        }
                                    }
                                }

                                $updateStoreChannelDetailData['publicationDate'] = $storeChannelDetail->publicationDate;
                                $updateStoreChannelDetailData['expirationDate'] = $storeChannelDetail->expirationDate;

                                $imageExt = true;
                                if (isset($storeChannelDetail->attachment->name) && !empty($storeChannelDetail->attachment->name)) {
                                    $imagesType = ["gif", "jpeg", "jpg", "png"];

                                    $tmp = explode(".", $storeChannelDetail->attachment->name);
                                    $format = end($tmp);

                                    $imageExt = true;
                                    if (!in_array($format, $imagesType))
                                        $imageExt = false;
                                }

                                if ((isset($storeChannelDetail->attachment->url) && !empty($storeChannelDetail->attachment->url))) {
                                    if ($storeChannelDetailExistData->cms_image_url != $storeChannelDetail->attachment->url || (isset($storeChannelDetail->attachment->type) && $storeChannelDetailExistData['format'] != $storeChannelDetail->attachment->type)) {
                                        try {
                                            $storeChannelImg = file_get_contents($storeChannelDetail->attachment->url);

                                            $videosType = array(
                                                "mpeg",
                                                "mov",
                                                "wav",
                                                "avi",
                                                "dat",
                                                "flv",
                                                "3gp",
                                                "m4v"
                                            );

                                            $imgSave = rand();
                                            if ($imageExt === false) {
                                                if (in_array($format, $videosType)) {
                                                    $imgSave .= ".mp4";

                                                    exec("ffmpeg -i " . $storeChannelDetail->attachment->url . " -vcodec copy -acodec copy " . public_path() . "/uploads/channel_posts/" . $imgSave, $out);
                                                } else {
                                                    $imgSave .= "." . $format;
                                                    file_put_contents(public_path() . '/uploads/channel_posts/' . $imgSave, $storeChannelImg);
                                                }
                                            } else {
                                                file_put_contents(public_path() . '/uploads/channel_posts/' . $imgSave, $storeChannelImg);
                                            }


                                            $updateStoreChannelDetailData['media'] = $imgSave;
                                            $updateStoreChannelDetailData['format'] = $storeChannelDetail->attachment->type;

                                            if (!empty($storeChannelDetailExistData->image)) {
                                                delete_old_files(public_path().'/uploads/channel_posts/'.$storeChannelDetailExistData->image);
                                            }
                                        } catch (\Exception $ex) {
                                            //Image error
                                        }
                                    }
                                } else {
                                    if ($storeChannelDetailExistData->image) {
                                        delete_old_files(public_path().'/uploads/channel_posts/'.$storeChannelDetailExistData->image);
                                    }

                                    $updateStoreChannelDetailData['media'] = '';
                                }

                                $updateStoreChannelDetailData['updated_at'] = date('Y-m-d h:i:s');

                                $storeChannelDetailExistData->update($updateStoreChannelDetailData);

                                unset($updateStoreChannelDetailData);
                            } else {
                                $newStoreChannelDetailArr['cms_channel_detail_id'] = $storeChannelDetail->id;
                                $newStoreChannelDetailArr['channel_id'] = $channelId;
                                $newStoreChannelDetailArr['title'] = strip_tags($storeChannelDetail->title);
                                $newStoreChannelDetailArr['description'] = strip_tags($storeChannelDetail->description);
                                $newStoreChannelDetailArr['cms_image_url'] = (isset($storeChannelDetail->attachment->url) && !empty($storeChannelDetail->attachment->url)) ? $storeChannelDetail->attachment->url : '';

                                if (isset($storeChannelDetail->additionalFields) && count($storeChannelDetail->additionalFields) > 0) {
                                    foreach ($storeChannelDetail->additionalFields as $key1 => $additionalFieldData) {
                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'oldprice')) {
                                            $newStoreChannelDetailArr['old_price'] = strip_tags($additionalFieldData->value);
                                        }

                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'newprice')) {
                                            $newStoreChannelDetailArr['price'] = strip_tags($additionalFieldData->value);
                                        }

                                        if (isset($additionalFieldData->key) && ($additionalFieldData->key == 'price')) {
                                            $newStoreChannelDetailArr['price'] = strip_tags($additionalFieldData->value);
                                        }
                                    }
                                }

                                $newStoreChannelDetailArr['publicationDate'] = $storeChannelDetail->publicationDate;
                                $newStoreChannelDetailArr['expirationDate'] = $storeChannelDetail->expirationDate;
                                $newStoreChannelDetailArr['status'] = 1;

                                $imageExt = true;
                                if (isset($storeChannelDetail->attachment->name) && !empty($storeChannelDetail->attachment->name)) {
                                    $imagesType = ["gif", "jpeg", "jpg", "png"];

                                    $tmp = explode(".", $storeChannelDetail->attachment->name);
                                    $format = end($tmp);

                                    $imageExt = true;
                                    if (!in_array($format, $imagesType))
                                        $imageExt = false;
                                }

                                if (isset($storeChannelDetail->attachment->url) && !empty($storeChannelDetail->attachment->url)) {
                                    try {
                                        $storeChannelImg = file_get_contents($storeChannelDetail->attachment->url);

                                        $videosType = array(
                                            "mpeg",
                                            "mov",
                                            "wav",
                                            "avi",
                                            "dat",
                                            "flv",
                                            "3gp",
                                            "m4v"
                                        );

                                        $imgSave = rand();
                                        if ($imageExt === false) {
                                            if (in_array($format, $videosType)) {
                                                $imgSave .= ".mp4";

                                                exec("ffmpeg -i " . $storeChannelDetail->attachment->url . " -vcodec copy -acodec copy " . public_path() . "/uploads/channel_posts/" . $imgSave, $out);
                                            } else {
                                                $imgSave .= "." . $format;

                                                file_put_contents(public_path() . '/uploads/channel_posts/' . $imgSave, $storeChannelImg);
                                            }
                                        } else {
                                            file_put_contents(public_path() . '/uploads/channel_posts/' . $imgSave, $storeChannelImg);
                                        }

                                        $newStoreChannelDetailArr['media'] = $imgSave;
                                        $newStoreChannelDetailArr['format'] = $storeChannelDetail->attachment->type;
                                    } catch (\Exception $ex) {
                                        //Image error
                                    }
                                }

                                ChannelsDetails::create($newStoreChannelDetailArr);

                                unset($newStoreChannelDetailArr);
                            }
                        }
                    }

                    if (count($storeChannelDetailIds) > 0) {
                        ChannelsDetails::whereNotIn('cms_channel_detail_id', $storeChannelDetailIds)->where('channel_id', $channelId)->delete();
                    }
                }
            }
        }
    }

    public function cmsSubscribeStore($storeId = null, $platform = null, $token = null)
    {
        $cmsAuth = $this->getCmsAuth();

        if(!empty($cmsAuth)) {
            $subscribeData['platform'] = $platform;
            $subscribeData['token'] = $token;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/pushnotifications/organizations/" . $storeId . "/subscribe",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($subscribeData),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $cmsAuth,
                    "Content-Type: application/json",
                    "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                    "cache-control: no-cache"
                ),
            ));

            $storeSubscribeDataRes = curl_exec($curl);
            $storeSubscribeDataErr = curl_error($curl);

            curl_close($curl);

            if ($storeSubscribeDataErr) {
                exit;
            }

            return;
        }
    }

    public function unsubscribeStore($storeId = null, $token = null)
    {
        $cmsAuth = $this->getCmsAuth();

        if(!empty($cmsAuth)) {
            $unsubscribeData['token'] = $token;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/pushnotifications/organizations/" . $storeId . "/subscribe",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($unsubscribeData),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $cmsAuth,
                    "Content-Type: application/json",
                    "Postman-Token: 40a481d0-eaaf-418e-b862-6d805be0a7ac",
                    "cache-control: no-cache"
                ),
            ));

            $storeSubscribeDataRes = curl_exec($curl);
            $storeSubscribeDataErr = curl_error($curl);

            curl_close($curl);

            if ($storeSubscribeDataErr) {
                exit;
            }

            return;
        }
    }

    public function notificationData($userId = null)
    {
        $getUser = AppUsers::where('id',$userId)->where('status',config('global.enable'))->where('verified',config('global.enable'))->first();

        if(!empty($getUser)) {
            $cmsAuth = $this->getCmsAuth();

            if(!empty($cmsAuth)) {
                $sendNotification = 'No';

                if($getUser->fav_notify == 1) {
                    $getFavourite = Favourites::where('user_id',$userId)->get();

                    if(count($getFavourite) > 0) {
                        foreach ($getFavourite as $key => $favourite) {
                            $storeData = Stores::where('id',$favourite['store_id'])->where('status',config('global.enable'))->where('verified',config('global.enable'))->first();

                            if (!empty($storeData) && ($storeData['cms_notification_id'] != 0)) {
                                if (!empty($userData['category'])) {
                                    $userCategoryData = UserCategory::where('user_id',$userId)->get();

                                    if (count($userCategoryData) > 0) {
                                        $storeCategoryData = StoreCategory::where('store_id',$storeData->id)->get;

                                        if (count($storeCategoryData) > 0) {
                                            $userCategoryArr = [];
                                            foreach ($userCategoryData as $userCategory) {
                                                $userCategoryArr[] = $userCategory->category_id;
                                            }

                                            $storeCategoryArr = [];
                                            foreach ($storeCategoryData as $storeCategory) {
                                                $storeCategoryArr[] = $storeCategory->category_id;
                                            }

                                            $notifyCat = array_intersect($storeCategoryArr, $userCategoryArr);

                                            if (count($notifyCat) > 0) {
                                                $sendNotification = 'Yes';
                                            }
                                        }
                                    }
                                } else {
                                    $sendNotification = 'Yes';
                                }

                                if ($sendNotification == 'Yes') {
                                    $curl = curl_init();

                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => "https://cms.beabloo.com/engine2/rest/cms/api/v2/channels/" . $storeData->cms_notification_id . "/posts",
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

                                    $notificationDataRes = curl_exec($curl);
                                    $notificationDataErr = curl_error($curl);

                                    curl_close($curl);

                                    if ($notificationDataErr) {
                                        exit;
                                    } else {
                                        $notificationDetails = json_decode($notificationDataRes);

                                        if (count($notificationDetails) > 0) {
                                            foreach ($notificationDetails as $key1 => $notification) {
                                                $notificationExistData = PushNotifications::where('cms_notification_id',$notification->id)->first();

                                                if (empty($notificationExistData)) {
                                                    if (($notification->publicationDate >= (strtotime($favourite['created_at']) * 1000)) || ($notification->lastUpdated >= (strtotime($favourite['created_at']) * 1000))) {
                                                        $newNotificationDetailArr['cms_notification_id'] = $notification->id;
                                                        $newNotificationDetailArr['user_id'] = $userId;
                                                        $newNotificationDetailArr['store_id'] = $favourite['store_id'];
                                                        $newNotificationDetailArr['title'] = strip_tags($notification->title);
                                                        $newNotificationDetailArr['message'] = strip_tags($notification->description);
                                                        $newNotificationDetailArr['status'] = 1;
                                                        $newNotificationDetailArr['created'] = date('Y-m-d h:i:s');

                                                        if (isset($notification->attachment->url) && !empty($notification->attachment->url)) {
                                                            try {
                                                                $storeChannelImg = file_get_contents($notification->attachment->url);
                                                                $imgSave = rand();
                                                                file_put_contents(public_path() . '/uploads/notifications/' . $imgSave, $storeChannelImg);

                                                                $newNotificationDetailArr['image'] = $imgSave;
                                                            } catch (\Exception $ex) {
                                                                //Image error
                                                            }
                                                        }

                                                        PushNotifications::create($newNotificationDetailArr);
                                                        unset($newNotificationDetailArr);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
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
