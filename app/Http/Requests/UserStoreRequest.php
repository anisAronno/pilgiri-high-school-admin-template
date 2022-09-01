<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'phone' => 'required|max:15|min:10|unique:users,phone,'.$this->id.',id',
            'name' => 'nullable',
            'password' => 'required|alpha_dash|max:50|min:4',
            'password_confirmation'=> 'required|same:password'
        ];
    }
}
