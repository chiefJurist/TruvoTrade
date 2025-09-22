<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Investment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'plan',
        'amount',
        'status',
        'minimum',
        'maximum',
        'interest',
        'profit',
        'end',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'profit' => 'decimal:2',
        'end' => 'datetime',
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
