<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Facebook extends SocialNetwork{
    
    function facebookAuth() {
        try {
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate( "Facebook" );
            
            $user_profile = $adapter->getUserProfile();
            
            $this->container->hybridauth->logoutAllProviders();
            
            
            var_dump($user_profile);
            
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
}