<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;
use Respect\Validation\Validator as v;

class SocialNetwork{
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    public function postSignUp($email, $name, $token){        
        $user = User::create([
            'email'=>$email,
            'name'=>$name,
            'accessToken'=>$token
        ]);        
    }
    
    function auth($provider) {
        try {
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate($provider);
            
            $user_profile = $adapter->getUserProfile();
            
            $this->container->hybridauth->logoutAllProviders();
            
            
            var_dump($user_profile);
            
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
}