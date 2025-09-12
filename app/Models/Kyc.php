<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    //
    protected $fillable = [
        'user_id',
        'type',
        'document_front',
        'document_back',
        'status',
    ] ;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
