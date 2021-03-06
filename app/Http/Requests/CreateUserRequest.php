<?php

namespace App\Http\Requests;

use App\UserRoles;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class CreateUserRequest extends FormRequest
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
            'name' => [
                'required',
                'filled'
            ],
            'email' => [
                'required',
                'filled',
                'email'
            ],
            'password' => [
                'required',
                'filled',
                Password::min(6)
            ],
            'role' => [
                'required',
                'filled',
                Rule::in(UserRoles::ROLES)
            ],
        ];
    }
}
