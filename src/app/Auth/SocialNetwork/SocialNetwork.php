<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;
use Respect\Validation\Validator as v;

class SocialNetwork{
    protected $container;
    
    public function __Construct($container){
        $this->container = $container;
    }
    
    public function postSignUp($email, $name, $password){        
        $user = User::create([
            'email'=>$email,
            'name'=>$name,
            'password'=>password_hash($password, PASSWORD_DEFAULT)
        ]);        
    }
}