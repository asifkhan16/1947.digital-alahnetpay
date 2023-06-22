<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'card_number',
        'cvc',
        'issue_date',
        'expiry_date',
        'is_activated',
        'is_freeze',
        'status',
    ];  
}
