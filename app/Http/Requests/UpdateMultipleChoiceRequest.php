<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMultipleChoiceRequest extends FormRequest
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
            'question_type' => 'string|max:6',
            'question' => 'string',
            'question_explanation' => 'string',
            'answer_a' => 'string',
            'answer_b' => 'string',
            'answer_c' => 'string',
            'answer_d' => 'string',
            'correct_answer' => 'string|max:1',
        ];
    }
}
