<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_type',
        'question',
        'question_explanation',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'correct_answer',
    ];

        /**
     * Get all of the sessionQuestion for the MultipleChoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessionQuestion(): HasMany
    {
        return $this->hasMany(SessionQuestion::class, 'id', 'id');
    }
}
