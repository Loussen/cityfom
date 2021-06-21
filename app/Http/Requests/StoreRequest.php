<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        $image = request()->isMethod('put') ? 'nullable' : 'required';

        return [
            'name'   => 'required|min:3',
            'description'   => 'required|min:5',
            "category_id"    => "required|array|max:3",
            "category_id.*"  => "required|string|distinct|min:2",
            "tags"    => "required|array|min:1|max:10",
            "tags.*"  => "required|string|distinct|min:2",
            "country"  => "required|string|min:3",
            "latitude"  => "required|string|min:3",
            "longitude"  => "required|string|min:3",
            "email"  => "required|email|min:3",
            "partner_type"  => "required|numeric|in:1,2",
            "phone"  => "required|string|min:3",
            "image" => $image,
            "image.*" => "mimes:jpeg,jpg,png|max:8000",
            "address" => [
                "required",
                "string",
                function($attribute, $value, $fail) {
                    $latitude = request('latitude');
                    $longitude = request('longitude');

                    if (strlen($latitude) > 0 && strlen($longitude) > 0) {

                    } else {
                        return $fail("Please enter a valid address.");
                    }
                },
            ],
        ];
    }
}
