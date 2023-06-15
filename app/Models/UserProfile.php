<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date_of_birth',
        'country',
        'city',
        'address',
        'postal_code',
        'country_code',
        'phone_number',
    ];
}
