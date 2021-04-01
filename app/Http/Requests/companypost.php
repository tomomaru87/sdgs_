<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companypost extends FormRequest
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
            'name' => 'required|max:50|string',
            'contents'=>'required|string',
            'history'=>'required|string',
            'link' => 'url|nullable',
            'msg'=>'required|string',
            'image'=>'image'
        ];
    }
}
