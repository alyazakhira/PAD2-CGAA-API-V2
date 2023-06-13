<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
    ];

        /**
     * Get the user that owns the Session
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the sessionQuestion associated with the Session
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sessionQuestion(): HasOne
    {
        return $this->hasOne(SessionQuestion::class, 'id', 'id');
    }

    /**
     * Get the sessionAnswer associated with the Session
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sessionAnswer(): HasOne
    {
        return $this->hasOne(SessionAnswer::class, 'id', 'id');
    }
}
