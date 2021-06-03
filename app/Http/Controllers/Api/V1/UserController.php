<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\AppUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'email' => 'required|email',
            'password' => 'required|min:3',
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
        $validatedData = $request->validate([
            'firstname' => 'required|string|min:3|max:55',
            'lastname' => 'required|string|min:3|max:55',
            'birthday' => 'required|date|date_format:Y-m-d',
            'email' => 'required|email|unique:app_users',
            'language' => 'required|string|in:az,en,ru,es',
            'password' => 'required|string',
            'repeat_password' => 'required|same:password',
            'photo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
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

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['photo'] = $imageName;
        $validatedData['username'] = $request->firstname." ".$request->lastname;

        $user = AppUsers::create($validatedData);

        $userDataResponse['user_id'] = $user->id;
        $userDataResponse['email'] = $user->email;
        $userDataResponse['verified_status'] = $user->verified;
        $userDataResponse['profile_picture'] = (!empty($user->photo) && File::exists(public_path().'/uploads/user_images/'.$user->photo)) ? asset("/uploads/user_images/".$user->photo) : asset("/uploads/profile_picture.png");

        $userDataResponse['token'] = $user->createToken('CityFom')->accessToken;
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

    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
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
}
