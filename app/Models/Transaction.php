<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable =[
        'transaction_unqiue_id',
        'user_id',
        'wallet_id',
        'description',
        'credit',
        'debit',
        'status',
        'charges'
    ];

    public function wallet(){
        return $this->belongsTo(Wallet::class, 'wallet_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function transaction_detail(){
        return $this->hasOne(TransactionDetail::class, 'transaction_id','id');
    }
}
