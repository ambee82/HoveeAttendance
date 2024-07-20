<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserRole;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $connection = 'second_db';
    protected $table = 'whowe_users';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     
    protected $fillable = [
        'whowe_id',
        'first_name',
        'last_name',
        'email',
        'dob',
        'mobile_no',
        'pincode',
        'profile_images',
        'government_proof_image',
        'terms_accepted',
        'government_proof',
        'role',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function user_role()
    {
        return $this->hasOne(UserRole::class, 'user_id', 'id');
    }
}
