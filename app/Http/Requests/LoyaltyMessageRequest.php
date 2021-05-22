<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoyaltyMessageRequest extends FormRequest
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
            'description'       => 'required|min:3',
            'store_id'          => 'required|numeric|min:1',
            'points'            => 'required|numeric|min:1',
            'type'              => 'required|numeric|min:1',
            'image'             => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
