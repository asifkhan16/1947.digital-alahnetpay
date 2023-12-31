<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'currency_id',
        'name',
        'address',
        'balance'
    ];

    public function currency(){
        return $this->belongsTo(Currency::class, 'currency_id','id');
    }
}
