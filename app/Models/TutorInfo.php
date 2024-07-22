<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorInfo extends Model
{
    use HasFactory;
    protected $table = 'tutor_info';
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'qualification',
        'skills',
        'experience',
        'teaching',
    ];

    public function user_info()
    {
        return $this->belongsTo(TutorInfo::class, 'user_id');
    }
}
