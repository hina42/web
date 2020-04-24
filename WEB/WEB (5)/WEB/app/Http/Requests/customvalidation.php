<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customvalidation extends FormRequest
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
         'email'=>'required',
         'password'=>'required',
         'image'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'you must fill this email field',
            'password.required'=>'you must fill this password field',
        ];
    }

    public function attributes()
    {
        return [
    'image'=>'photo'
        ];
    }


}
