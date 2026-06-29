<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockedSlot extends Model
{
    protected $fillable = [
        'date', 'time', 'reason',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
