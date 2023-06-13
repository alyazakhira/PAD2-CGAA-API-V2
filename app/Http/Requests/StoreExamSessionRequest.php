<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamSessionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|numeric',
            'type' => 'required|string|max:6',
            'score' => 'numeric',
            'correct_answer' => 'numeric',
            'wrong_answer' => 'numeric',
            'not_answered' => 'numeric',
        ];
    }
}
