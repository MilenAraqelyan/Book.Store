<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class  UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required|unique:users|max:20|min:6',
            'email' => 'email|unique:users',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => [
                'required',
                'min:6'
            ],
            'gender'=>'required'
        ];
    }
}

