<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    //
    // Added
    protected $fillable = [
        'message',
    ];
}
