<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionQuestion extends Model
{
    use HasFactory;

    /**
     * Get the session that owns the SessionQuestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class, 'id', 'id');
    }

    /**
     * Get the multipleChoice that owns the SessionQuestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function multipleChoice(): BelongsToMany
    {
        return $this->belongsToMany(MultipleChoice::class, 'id', 'id');
    }
}
