<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'deposit_method_id',
        'gateway_payment_id',
        'amount',
        'proof_file',
        'reference_number'
    ];
}
