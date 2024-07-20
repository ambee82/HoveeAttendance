<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    use HasFactory;
    protected $connection = 'second_db';
    protected $fillable = ['user_id', 'otp', 'expire_at'];
}
