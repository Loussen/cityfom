<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\UserResource;
use App\Mail\AppMail;
use App\Models\AppUsers;
use App\Models\EmailTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:5',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
        ]);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();

            $getUser = AppUsers::find($user->id);

            if ($getUser->status == 1 && $getUser->verified == 1) {

                $userData = [
                    'device_type' => $validatedData["device_type"],
                    'device_id' => $validatedData["device_id"],
                    'last_login' => date("Y-m-d H:i:s"),
                ];

                $getUser->update($userData);

                $userDetails = new UserResource($getUser);

                $userDetails['token'] = $user->createToken('CityFom')->accessToken;

                return $this->successResponse($userDetails);
            } else {
                return $this->errorResponse("Status not verified", 403);
            }
        } else {
            return $this->errorResponse(null, 401);
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
            'email' => ['required', 'string', 'email', 'max:191', Rule::unique('app_users')->where(function ($query) use ($request) {
                return $query->where(['status' => config("global.enable"), 'email' => $request->email]);
            })],
            'language' => 'required|string|in:' . implode(",", $langs),
            'password' => 'required|string|min:5',
            'repeat_password' => 'required|string|same:password',
            'photo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'gender' => 'required|numeric|in:1,2',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
        ]);

        $imageName = null;
        if ($request->hasFile('photo') && $request->photo != '') {
            $image = $request->file('photo');
            $imageName = time() . "_" . $image->getClientOriginalName();

            $imageType = explode(".", $imageName);
            $imageType = end($imageType);

            if (in_array(strtolower($imageType), ['jpg', 'jpeg', 'png'])) {
                $image->move(public_path() . '/uploads/user_images/', $imageName);
            } else {
                return $this->errorResponse("Profile picture not valid", 403);
            }
        }

        $userData['username'] = $validatedData['firstname'] . " " . $validatedData['lastname'];
        $userData['email'] = $validatedData['email'];
        $userData['password'] = bcrypt($validatedData['password']);
        $userData['photo'] = $imageName;
        $userData['birthday'] = date('Y-m-d', strtotime($validatedData['birthday']));
        $userData['otp'] = rand(1000, 9999);
        $userData['verified'] = config('global.disable');
        $userData['status'] = config('global.disable');
        $userData['fav_notify'] = config('global.enable');

        $user = AppUsers::create($userData);

        $emailTemplate = EmailTemplates::where('slug', 'user_registration_app')->first();

        if ($emailTemplate) {
            $language = $validatedData['language'];
            $emailDetails = [
                'title' => $emailTemplate->{'subject_' . $language} ?? $emailTemplate->subject_en,
                'body' => $emailTemplate->{'content_' . $language} ?? $emailTemplate->content_en
            ];

            $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{email}', '{password}', '{otp}'), array($user->firstname, $user->lastname, $user->email, $validatedData['password'], $user->otp), $emailDetails['body']);

            Mail::to($validatedData['email'])->send(new AppMail($emailDetails));
        }

        $userDetails = new UserResource($user);

        return $this->successResponse($userDetails);
    }

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function socialLogin(Request $request)
    {
        $loginTypes = config("global.login_types");

        $loginTypesFlip = array_flip($loginTypes);

        $validatedData = $request->validate([
            'login_type' => 'required|numeric|in:' . implode(",", $loginTypesFlip),
            'social_id' => 'required|string|min:3',
            'device_type' => 'required|numeric|min:1',
            'device_id' => 'required|string|min:3',
            'email' => 'sometimes|email',
            'username' => 'required|string|min:3',
            'photo' => 'sometimes|string|min:3',
        ]);

        if ($request->has("email")) {
            $filter['key'] = "email";
            $filter['value'] = $validatedData["email"];
        } else {
            $filter["key"] = $loginTypes[$validatedData["login_type"]];
            $filter["value"] = $validatedData["social_id"];
        }

        $user = AppUsers::where($filter["key"], $filter['value'])->where('status', config('global.enable'))->first();

        if ($user) {

            $userData = [
                'device_type' => $validatedData["device_type"],
                'device_id' => $validatedData["device_id"],
                'last_login' => date("Y-m-d H:i:s"),
            ];

            $user->update($userData);
        } else {
            $imageName = null;
            if ($request->has('photo')) {
                $imageType = explode(".", $request->photo);
                $imageType = end($imageType);

                if (in_array(strtolower($imageType), ['jpg', 'jpeg', 'png'])) {
                    $image = file_get_contents($request->photo);
                    $imageName = time() . "." . $imageType;
                    file_put_contents(public_path() . '/uploads/user_images/' . $imageName, $image);
                } else {
                    return $this->errorResponse("Profile picture not valid", 403);
                }
            }

            $userData['username'] = $validatedData['username'];
            $userData['photo'] = $imageName;
            $userData['verified'] = config('global.enable');
            $userData['status'] = config('global.enable');
            $userData['fav_notify'] = config('global.enable');
            $userData['device_type'] = $validatedData['device_type'];
            $userData['device_id'] = $validatedData['device_id'];
            $userData[$loginTypes[$validatedData["login_type"]]] = $validatedData['social_id'];

            $user = AppUsers::create($userData);
        }

        $userDetails = new UserResource($user);

        return $this->successResponse($userDetails);
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
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = AppUsers::where('otp', $validatedData['otp'])->where('id', $validatedData['user_id'])->where('status', config("global.disable"))->first();

        if ($user) {
            $userData = [
                'status' => config("global.enable"),
                'verified' => config("global.enable"),
            ];

            $user->update($userData);

            $userDetails = new UserResource($user);

            $userDetails['token'] = $user->createToken('CityFom')->accessToken;

            return $this->successResponse($userDetails);
        }

        return $this->errorResponse('User not found', 404);
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
            'language' => 'required|string|in:' . implode(",", $langs),
            'user_id' => 'required|numeric|min:1',
        ]);

        $user = AppUsers::where('id', $validatedData['user_id'])->where('status', config("global.disable"))->first();

        if ($user) {
            $userData = [
                'otp' => rand(1000, 9999)
            ];

            $user->update($userData);

            $emailTemplate = EmailTemplates::where('slug', 'user_resend_otp')->first();

            if ($emailTemplate) {
                $language = $validatedData['language'];

                $emailDetails = [
                    'title' => $emailTemplate->{'subject_' . $language} ?? $emailTemplate->subject_en,
                    'body' => $emailTemplate->{'content_' . $language} ?? $emailTemplate->content_en
                ];

                $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{email}', '{otp}'), array($user->firstname, $user->lastname, $user->email, $user->otp), $emailDetails['body']);

                Mail::to($user->email)->send(new AppMail($emailDetails));

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found', 404);
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
            'language' => 'required|string|in:' . implode(",", $langs),
            'email' => 'required|string|email',
        ]);

        $user = AppUsers::where('email', $validatedData['email'])->where('status', config("global.enable"))->where('verified', config("global.enable"))->first();

        if ($user) {
            $userData = [
                'otp' => rand(1000, 9999)
            ];

            $user->update($userData);

            $emailTemplate = EmailTemplates::where('slug', 'app_forgot_password')->first();

            if ($emailTemplate) {
                $language = $validatedData['language'];

                $emailDetails = [
                    'title' => $emailTemplate->{'subject_' . $language} ?? $emailTemplate->subject_en,
                    'body' => $emailTemplate->{'content_' . $language} ?? $emailTemplate->content_en
                ];

                $emailDetails['body'] = str_replace(array('{first_name}', '{last_name}', '{otp}'), array($user->firstname, $user->lastname, $user->otp), $emailDetails['body']);

                Mail::to($user->email)->send(new AppMail($emailDetails));

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found', 404);
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
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = AppUsers::where('otp', $validatedData['otp'])->where('id', $validatedData['user_id'])->first();

        if ($user) {
            $isOtherToken = DB::table('password_resets')->where('email', $user->email)->first();

            $token = Str::random(80);

            if ($isOtherToken) {
                $token = $isOtherToken->token;
            }

            DB::table('password_resets')->insert([
                'email' => $user->email,
                'token' => $token,
            ]);

            $responseData = [
                'email' => $user->email,
                'password_token' => $token
            ];

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Reset password api
     *
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'password' => 'required|string|min:5',
            'repeat_password' => 'required|string|same:password',
            'user_id' => 'required|numeric|min:1',
            'password_token' => 'required|string|min:1',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = AppUsers::where('id', $validatedData['user_id'])->where('status', config("global.enable"))->first();

        if ($user) {
            $passwordToken = DB::table('password_resets')->where([
                'email' => $user->email,
                'token' => $validatedData['password_token']
            ]);

            if ($passwordToken->count() > 0) {
                $userData = [
                    'password' => bcrypt($validatedData['password']),
                ];

                $user->update($userData);

                $passwordToken->delete();

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Reset password api
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'password' => 'required|string|min:5',
            'current_password' => 'required|string|min:5',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = AppUsers::where('id', $user->id)->where('status', config("global.enable"))->first();

        if ($user) {
            if (Hash::check($validatedData['current_password'], $user->password)) {
                $userData = [
                    'password' => bcrypt($validatedData['password']),
                ];

                $user->update($userData);

                return $this->successResponse(null);
            }
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Update profile api
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'firstname' => 'required|string|min:3|max:55',
            'lastname' => 'required|string|min:3|max:55',
            'birthday' => 'required|date|date_format:Y-m-d',
            'gender' => 'required|numeric|in:1,2',
            'photo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = AppUsers::where('id', $user->id)->where('status', config("global.enable"))->first();

        if ($user) {
            $imageName = null;
            if ($request->hasFile('photo') && $request->photo != '') {
                $image = $request->file('photo');
                $imageName = time() . "_" . $image->getClientOriginalName();

                $imageType = explode(".", $imageName);
                $imageType = end($imageType);

                if (in_array(strtolower($imageType), ['jpg', 'jpeg', 'png'])) {
                    delete_old_files(public_path().'/uploads/user_images/'.$user->photo);

                    $image->move(public_path() . '/uploads/user_images/', $imageName);
                } else {
                    return $this->errorResponse("Profile picture not valid", 403);
                }
            }

            $userData['firstname'] = $validatedData['firstname'];
            $userData['lastname'] = $validatedData['lastname'];
            $userData['gender'] = $validatedData['gender'];
            $userData['photo'] = $imageName;
            $userData['birthday'] = date('Y-m-d', strtotime($validatedData['birthday']));

            $user->update($userData);

            $userDetails = new UserResource($user);

            return $this->successResponse($userDetails);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        $user = Auth::user();
        $userDetails = new UserResource($user);
        return $this->successResponse($userDetails);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    protected function userDetailById($userId)
    {
        $userDetail = null;

        $userId = intval($userId);

        if($userId > 0)
        {
            $userDetail = AppUsers::find($userId);
        }

        return $userDetail;
    }

    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
