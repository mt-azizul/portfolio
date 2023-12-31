<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExperienceRequest extends FormRequest
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
        return [
            'title' => 'required|string',
            'company' => 'required|string',
            'location' => 'nullable|string',
            'description' => 'nullable|string',
            'started_at' => 'nullable|date',
            'end_at' => 'nullable|date',
            'user_id' => 'nullable|exists:users,id',
        ];
    }
}
