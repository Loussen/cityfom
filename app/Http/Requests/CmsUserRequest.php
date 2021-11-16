<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'             => 'required',
            'lastname'              => 'required',
            'email'                 => 'required|unique:cms_users,email,'.request('id'),
            'image'                 => 'sometimes|mimes:png,jpg,jpeg,ico|max:2048',
//            'password'              => 'sometimes',
//            'confirm_password'      => 'same:password',
            "role_id"               => "required|numeric|min:1",
            'never_expire'          => 'sometimes',
            'expire_date'           => 'required_if:never_expire,0',
        ];
    }
}
