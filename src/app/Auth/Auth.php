<?php

namespace App\Auth;

//use App\Models\User;

class Auth{
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    public function user(){
        if(isset($_SESSION['user'])){
            $client = \ClientQuery::create()
            ->filterById($_SESSION['user'])
            ->find();
            var_dump($client->getFirst());
            
            return $client->getFirst();
        }
    }
    
    public function check(){
        return isset($_SESSION['user']);
    }
    
    public function findUser($email){
        $client = \ClientQuery::create()
        ->filterByEmail($email)
        ->find();
        var_dump($client->getFirst());
        
        return $client->getFirst();
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