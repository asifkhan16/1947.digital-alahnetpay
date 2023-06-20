<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseDepositMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'deposit_method_id',
        'amount',
        'fee'
    ];  
}
