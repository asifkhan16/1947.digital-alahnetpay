<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscrowTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'escrow_id'
    ];
}
