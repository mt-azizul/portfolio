<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'title.*' => ['required', 'string', 'max:255'],
            'description.*' => ['nullable', 'string'],
            'live_link.*' => ['nullable', 'string', 'max:255'],
            'repo_link.*' => ['nullable', 'string', 'max:255'],
            'started_at.*' => ['nullable', 'date'],
            'end_at.*' => ['nullable', 'date'],
        ];
    }
}
