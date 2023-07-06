<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business_kyc_verfication extends Model
{
    use HasFactory;
    protected $fillable = [
        'merchant_id',
        'document_one',
        'document_two',
        'status'
    ];
}
