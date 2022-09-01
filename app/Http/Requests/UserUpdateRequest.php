<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|max:15|min:10|unique:users,phone,'.$this->user->id.',id',
            'email' => 'nullable|max:50|min:4|email|unique:users,email,'.$this->user->id.',id',
        ];
    }
}
