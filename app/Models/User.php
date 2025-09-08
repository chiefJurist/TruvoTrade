<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country',
        'phone_number',
        'gender',
        'address',
        'password',
        'verification_token',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'balance' => 'decimal:2',
            'withdrawals' => 'decimal:2',
            'investments' => 'decimal:2',
            'profits' => 'decimal:2',
            'token_balance' => 'decimal:2',
            'token_profit' => 'decimal:2',
        ];
    }

    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class);
    }

    public function deposits()
    {
        return $this->hasMany(\App\Models\Deposit::class);
    }
}
