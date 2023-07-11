<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_name',
        'store_address',
        'client_id',
        'client_secret',
        'website_url',
        'status',
    ];

    public function business_kyc_verification()
    {
        return $this->hasOne(Business_kyc_verfication::class, 'merchant_id', 'id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
