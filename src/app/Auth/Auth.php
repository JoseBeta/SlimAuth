<?php

namespace App\Auth;

use App\Models\User;

class Auth{
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    public function user(){
        if(isset($_SESSION['user'])){
            return User::find($_SESSION['user']);
        }
    }
    
    public function check(){
        return isset($_SESSION['user']);
    }
    
    public function findUser($email){
        return User::where('email', $email)->first();
    }
    
    public function attempt($email, $password){
        $user = self::findUser($email);
        
        if(!$user){
            return false;
        }
        
        if(password_verify($password, $user->password)){
            $_SESSION['user'] = $user->id;
            
            return true;
        }
        
        return false;
    }
    
    public function logout(){
        unset($_SESSION['user']);
        $this->container->hybridauth->logoutAllProviders();
    }
}