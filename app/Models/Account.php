<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    //
    protected $fillable = [
        'user_id',
        'type',
        'account_type',
        'account_name',
        'account_number',
        'bank_country',
        'bank_currency',
        'bank_name',
        'branch_name',
        'sort_code',
        'routing_number',
        'swift_code',
        'iban_number',
        'wallet_chain',
        'wallet_address',
        'label_of_account'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
