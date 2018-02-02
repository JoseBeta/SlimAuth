<?php

namespace App\Auth\SocialNetwork;

class Twitter extends SocialNetwork{
    
    function twitterAuth() {
        try {
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate( "Twitter" );
            
            $user_profile = $adapter->getUserProfile();
            
            
            var_dump($user_profile);
            
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
}