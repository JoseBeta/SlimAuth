<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'users';
    
    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
        'lastName',
        'phone',
        'country',
        'city',
        'address',
    ];
    
    public function setPassword($password){
        $this->update([
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }
}