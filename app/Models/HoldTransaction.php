<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoldTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'hold_id',
        'transaction_id',
        'amount',
        'status',
    ];
}
