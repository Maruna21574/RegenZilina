<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    protected $fillable = [
        'code', 'percent', 'used', 'used_by_email', 'expires_at',
    ];

    protected $casts = [
        'used' => 'boolean',
        'expires_at' => 'datetime',
    ];

    public function isValid(): bool
    {
        return !$this->used && $this->expires_at->isFuture();
    }
}
