<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChannelPostRequest extends FormRequest
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
        $rules = [
            'title'                 => 'required|min:3',
            'store_id'              => 'required|numeric|min:1',
            'channel_id'            => 'required|numeric|min:1',
            'image'                 => 'required|mimes:png,jpg,jpeg,ico|max:2048',
            'public_expire_date'    => 'required',
        ];

        if(request('channel_id'))
        {
            $channelId = request('channel_id');
            $channelId = explode("-",$channelId);
            $categoryId = $channelId[1];

            if($categoryId == 1 || $categoryId == 2) {
                $rules['price'] = 'required';
            } elseif($categoryId == 3) {
                $rules['new_price'] = 'required';
                $rules['old_price'] = 'required';
            } elseif($categoryId == 4 || $categoryId == 5 || $categoryId == 6) {
                $rules['additional_text'] = 'required';
            }
        }

        return $rules;
    }
}
