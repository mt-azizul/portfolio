<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user') ?? null;

        return [
            'username' => [
                'string',
                'required',
                Rule::unique('users', 'username')->ignore($userId),
            ],
            'email' => [
                'string',
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => 'string|nullable|min:6',
            'phone' => 'string|required',
            'dob' => 'string|required',
            'area' => 'string|required',
            'city' => 'string|nullable',
            'state' => 'string|nullable',
            'country' => 'string|required',
            'residence' => 'string|nullable',
            'bio' => 'string|nullable',
            'blood_group' => 'string|required',
            'profic' => 'file|nullable|mimes:png,jpg,jpeg,webp|max:2048',

        ];
    }
}
