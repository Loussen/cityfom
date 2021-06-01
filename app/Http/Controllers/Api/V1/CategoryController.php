<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CategoryController extends ApiController
{

    public function all()
    {
        $category = Categories::all();
        return $this->successResponse($category);
    }

//    public function store(Request $request)
//    {
//        $validator = $this->validateUser();
//        if($validator->fails()){
//            return $this->errorResponse($validator->messages(), 422);
//        }
//
//        $user = User::create([
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'password' => Hash::make($request->get('password')),
//        ]);
//
//        return $this->successResponse($user,'User Created', 201);
//    }
//
//    public function show(User $user)
//    {
//        return $this->successResponse($user);
//    }
//
//    public function destroy(User $user)
//    {
//        $user->delete();
//        return $this->successResponse(null, 'User Deleted');
//    }
//
//    public function validateUser(){
//        return Validator::make(request()->all(), [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//    }

}
