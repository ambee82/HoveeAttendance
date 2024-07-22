<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Roles;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = 'user_info';

    protected $fillable = [
        'user_id',
        'role_id',
        'primary_address',
        'secondary_address',
        'city',
        'state',
        'country',
        'zipcode',
    ];

    public function role()
    {
        return $this->hasOne(Roles::class, 'id', 'role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'role_id');
    }
    public function tutor_info()
    {
        return $this->hasOne(TutorInfo::class, 'user_id', 'user_id');
    }
}
