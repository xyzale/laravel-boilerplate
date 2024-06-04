<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => ['min:4', 'required'],
            'email' => ['email', 'required'],
        ];
    }
}
