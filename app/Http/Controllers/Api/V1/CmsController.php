<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use Illuminate\Support\Facades\Session;

class CmsController
{
    /**
     * CMS auth function
     *
     * @return \Illuminate\Http\Response
     */
    public static function auth()
    {
        $cmsUsername = Configs::where('slug','cms_username')->first();
        $cmsPassword = Configs::where('slug','cms_password')->first();

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

        curl_close($curl);

        if (json_last_error() === JSON_ERROR_NONE) {
            Session::flush('CMSAUTH');
        } else {
            Session::put('CMSAUTH',$responseAuth);
        }

        return $responseAuth;
    }

}
