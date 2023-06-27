<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'creator_id',
        'receiver_id',
        'seller_id',
        'buyer_id',
        'seller_wallet_id',
        'buyer_wallet_id',
        'amount',
        'description',
        'seller_status',
        'buyer_status',
        'request_type'
    ];

    public function seller()
    {
        return $this->belongsTo(User::class,'seller_id','id');
    }
    public function buyer()
    {
        return $this->belongsTo(User::class,'buyer_id','id');
    }
}
