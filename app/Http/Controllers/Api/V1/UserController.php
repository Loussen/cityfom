<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Mail\AppMail;
use App\Models\AppUsers;
use App\Models\EmailTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class UserController extends ApiController
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
        ]);

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();

            $getUser = AppUsers::find($user->id);

            if($getUser->status == 1 && $getUser->verified == 1) {

                $userData = [
                    'device_type' => $validateData["device_type"],
                    'device_id' => $validateData["device_id"],
                    'last_login' => date("Y-m-d H:i:s"),
                ];

                $getUser->update($userData);

                $userDataResponse['user_id'] = $getUser->id;
                $userDataResponse['email'] = $getUser->email;
                $userDataResponse['firstname'] = $getUser->firstname;
                $userDataResponse['lastname'] = $getUser->lastname;
                $userDataResponse['user_profile_id'] = $getUser->cms_user_id;
                $userDataResponse['verified_status'] = intval($getUser->verified);
                $userDataResponse['profile_picture'] = (!empty($getUser->photo) && File::exists(public_path().'/uploads/user_images/'.$getUser->photo)) ? asset("/uploads/user_images/".$getUser->photo) : asset("/uploads/profile_picture.png");
                $userDataResponse['token'] = $user->createToken('CityFom')->accessToken;

                return $this->successResponse($userDataResponse);
            } else {
                return $this->errorResponse("Status not verified",403);
            }
        }
        else{
            return $this->errorResponse(null,401);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'firstname' => 'required|string|min:3|max:55',
            'lastname' => 'required|string|min:3|max:55',
            'birthday' => 'required|date|date_format:Y-m-d',
            'email' => ['required', 'string', 'email', 'max:191',Rule::unique('app_users')->where(function ($query) use ($request) {
                return $query->where(['status' => config("global.enable"), 'email' => $request->email]);
            })],
            'language' => 'required|string|in:'.implode(",",$langs),
            'password' => 'required|string',
            'repeat_password' => 'required|string|same:password',
            'photo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'gender' => 'required|numeric|in:1,2',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
        ]);

        $imageName = null;
        if($request->hasFile('photo') && $request->photo != '') {
            $image = $request->file('photo');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/user_images/',$imageName);
            }
            else
            {
                return $this->errorResponse("Profile picture not valid",403);
            }
        }

        $userData['username'] = $validatedData['firstname']." ".$validatedData['lastname'];
        $userData['password'] = bcrypt($validatedData['password']);
        $userData['photo'] = $imageName;
        $userData['birthday'] = date('Y-m-d', strtotime($validatedData['birthday']));
        $userData['otp'] = rand(1000, 9999);
        $userData['verified'] = config('global.disable');
        $userData['fav_notify'] = config('global.enable');

        $user = AppUsers::create($userData);

        $emailTemplate = EmailTemplates::where('slug','user_registration_app')->first();

        if($emailTemplate) {
            $language = $validatedData['language'];
            $emailDetails = [
                'title' => $emailTemplate->{'subject_'.$language} ?? $emailTemplate->subject_en,
                'body' => $emailTemplate->{'content_'.$language} ?? $emailTemplate->content_en
            ];

            $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{email}', '{password}', '{otp}'), array($user->firstname, $user->lastname, $userData->email, $validatedData['password'], $user->otp), $emailDetails['body']);

            Mail::to($validatedData['email'])->send(new AppMail($emailDetails));
        }

        $userDataResponse['user_id'] = $user->id;
        $userDataResponse['email'] = $user->email;
        $userDataResponse['verified_status'] = $user->verified;
        $userDataResponse['profile_picture'] = (!empty($user->photo) && File::exists(public_path().'/uploads/user_images/'.$user->photo)) ? asset("/uploads/user_images/".$user->photo) : asset("/uploads/profile_picture.png");

        return $this->successResponse($userDataResponse);
    }

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function socialLogin(Request $request)
    {
        $loginTypes = config("global.login_types");

        $validateData = $request->validate([
            'login_type' => 'required|numeric|in:'.implode(",",$loginTypes),
            'photo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
            'email' => 'sometimes|email',
        ]);

        if($request->has("email")) {
            $filter['key'] = "email";
            $filter['value'] = $validateData["email"];
        } else {
            $filter["key"] = $loginTypes[$validateData["login_type"]];
            $filter["value"] = $validateData["login_type"];
        }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();

            $getUser = AppUsers::find($user->id);

            if($getUser->status == 1 && $getUser->verified == 1) {

                $userData = [
                    'device_type' => $validateData["device_type"],
                    'device_id' => $validateData["device_id"],
                    'last_login' => date("Y-m-d H:i:s"),
                ];

                $getUser->update($userData);

                $userDataResponse['user_id'] = $getUser->id;
                $userDataResponse['email'] = $getUser->email;
                $userDataResponse['firstname'] = $getUser->firstname;
                $userDataResponse['lastname'] = $getUser->lastname;
                $userDataResponse['user_profile_id'] = $getUser->cms_user_id;
                $userDataResponse['verified_status'] = intval($getUser->verified);
                $userDataResponse['profile_picture'] = (!empty($getUser->photo) && File::exists(public_path().'/uploads/user_images/'.$getUser->photo)) ? asset("/uploads/user_images/".$getUser->photo) : asset("/uploads/profile_picture.png");
                $userDataResponse['token'] = $user->createToken('CityFom')->accessToken;

                return $this->successResponse($userDataResponse);
            } else {
                return $this->errorResponse("Status not verified",403);
            }
        }
        else{
            return $this->errorResponse(null,401);
        }
    }

    /**
     * Verify account api
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyAccount(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'otp' => 'required|string|min:3|max:55',
            'user_id' => 'required|numeric|min:1',
            'language' => 'required|string|in:'.implode(",",$langs),
        ]);

        $user = AppUsers::where('otp',$validatedData['otp'])->where('id',$validatedData['user_id'])->where('status',config("global.disable"))->first();

        $userDataResponse = [];
        if($user) {
            $userData = [
                'status' => config("global.enable"),
                'verified' => config("global.enable"),
            ];

            $user->update($userData);

            $userDataResponse['user_id'] = $user->id;
            $userDataResponse['email'] = $user->email;
            $userDataResponse['firstname'] = $user->firstname;
            $userDataResponse['lastname'] = $user->lastname;
            $userDataResponse['profile_picture'] = (!empty($user->photo) && File::exists(public_path().'/uploads/user_images/'.$user->photo)) ? asset("/uploads/user_images/".$user->photo) : asset("/uploads/profile_picture.png");

            $userDataResponse['token'] = $user->createToken('CityFom')->accessToken;

            return $this->successResponse($userDataResponse);
        }

        return $this->errorResponse('User not found',404);
    }

    /**
     * Resend otp api
     *
     * @return \Illuminate\Http\Response
     */
    public function resendOtp(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'language' => 'required|string|in:'.implode(",",$langs),
            'user_id' => 'required|numeric|min:1',
        ]);

        $user = AppUsers::where('id',$validatedData['user_id'])->where('status',config("global.disable"))->first();

        if($user) {
            $userData = [
                'otp' => rand(1000,9999)
            ];

            $user->update($userData);

            $emailTemplate = EmailTemplates::where('slug','user_resend_otp')->first();

            if($emailTemplate) {
                $language = $validatedData['language'];

                $emailDetails = [
                    'title' => $emailTemplate->{'subject_'.$language} ?? $emailTemplate->subject_en,
                    'body' => $emailTemplate->{'content_'.$language} ?? $emailTemplate->content_en
                ];

                $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{email}', '{otp}'), array($user->firstname, $user->lastname, $user->email, $user->otp), $emailDetails['body']);

                Mail::to($user->email)->send(new AppMail($emailDetails));

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found',404);
    }

    /**
     * Resend otp api
     *
     * @return \Illuminate\Http\Response
     */
    public function forgotPassword(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'language' => 'required|string|in:'.implode(",",$langs),
            'email' => 'required|string|email',
        ]);

        $user = AppUsers::where('email',$validatedData['email'])->where('status',config("global.enable"))->where('verified',config("global.enable"))->first();

        if($user) {
            $userData = [
                'otp' => rand(1000,9999)
            ];

            $user->update($userData);

            $emailTemplate = EmailTemplates::where('slug','app_forgot_password')->first();

            if($emailTemplate) {
                $language = $validatedData['language'];

                $emailDetails = [
                    'title' => $emailTemplate->{'subject_'.$language} ?? $emailTemplate->subject_en,
                    'body' => $emailTemplate->{'content_'.$language} ?? $emailTemplate->content_en
                ];

                $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{otp}'), array($user->firstname, $user->lastname, $user->otp), $emailDetails['body']);

                Mail::to($user->email)->send(new AppMail($emailDetails));

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found',404);
    }

    /**
     * Verify otp api
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyOtp(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'otp' => 'required|string|min:3|max:55',
            'user_id' => 'required|numeric|min:1',
            'language' => 'required|string|in:'.implode(",",$langs),
        ]);

        $user = AppUsers::where('otp',$validatedData['otp'])->where('id',$validatedData['user_id'])->first();

        if($user) {
            return $this->successResponse(null);
        }

        return $this->errorResponse('User not found',404);
    }

    /**
     * Reset password api
     *
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'password' => 'required|string',
            'repeat_password' => 'required|string|same:password',
            'language' => 'required|string|in:'.implode(",",$langs),
        ]);

        $user = AppUsers::where('id',$user->id)->where('status',config("global.enable"))->first();

        if($user) {
            $userData = [
                'password' => bcrypt($validatedData['password']),
            ];

            $user->update($userData);

            return $this->successResponse(null);
        }

        return $this->errorResponse('User not found',404);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::user();
        return $this->successResponse($user);
    }

    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
