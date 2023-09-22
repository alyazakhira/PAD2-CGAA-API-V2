<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCaseStudyRequest extends FormRequest
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
            'question_type' => 'required|string|max:6',
            'information' => 'required',
            'instruction_count' => 'required',
            'instruction_1' => 'required',
            'instruction_2' => '',
            'instruction_3' => '',
            'instruction_4' => '',
            'instruction_5' => '',
            'instruction_6' => '',
            'instruction_7' => '',
            'instruction_8' => '',
            'instruction_9' => '',
            'instruction_10' => '',
            'key_answer_1' => 'required',
            'key_answer_2' => '',
            'key_answer_3' => '',
            'key_answer_4' => '',
            'key_answer_5' => '',
            'key_answer_6' => '',
            'key_answer_7' => '',
            'key_answer_8' => '',
            'key_answer_9' => '',
            'key_answer_10' => '',
        ];
    }
}
