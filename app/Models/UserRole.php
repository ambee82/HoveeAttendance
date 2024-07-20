<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Roles;

class UserRole extends Model
{
    protected $table = 'user_role';
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function role()
    {
        return $this->hasOne(Roles::class, 'id', 'role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'role_id');
    }
}
