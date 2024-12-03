<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Added
use Illuminate\Database\Eloquent\Relations\Belongsto;

class Chirp extends Model
{
    //
    // Added
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
