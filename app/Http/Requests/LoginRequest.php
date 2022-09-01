<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'phone' => 'required|max:15|min:10',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'The :attribute field can not be blank value',
            'phone.required' => 'The :attribute field can not be blank value',
            'phone.max' => 'The :attribute number maximum 15 character',
            'phone.min' => 'The :attribute number minimum 10 character',  
        ];
    }
}
