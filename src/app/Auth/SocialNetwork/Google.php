<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Google extends SocialNetwork{
    
    function googleAuth() {
        try {
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate( "Google" );
            
            $user_profile = $adapter->getUserProfile();
            
            $this->container->hybridauth->logoutAllProviders();
            
            
            var_dump($user_profile);
            
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
}