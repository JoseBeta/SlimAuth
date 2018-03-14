<?php

namespace App\Auth\SocialNetwork;

class SocialNetwork{
    protected $container;
    protected $hybridauth;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    function auth($provider) {
        try {            
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate($provider);

            return $adapter;
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
    
    function getUser($adapter){
        return $adapter->getUserProfile();
    }
    
    function getAccessToken($adapter){
        $token = $adapter->getAccessToken();
        
        return $token["access_token"];
    }
    
    public function attempt($userID, $service){
        $user = $this->container->auth->findUser($userID, $service);
        
        if($user){
            $_SESSION['user'] = $user->id;
            
            return true;
        }
        
        return false;
    }
}