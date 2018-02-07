<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_social extends Model{
    protected $table = 'users_social';
    public $timestamps = false;
    
    protected $fillable = [
        'social_id',
        'user_id',
        'service',
        'token',
    ];
}