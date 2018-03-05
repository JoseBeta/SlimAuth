<?php

namespace App\Auth\SocialNetwork;

class SocialNetwork{
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    function auth($provider) {
        try {            
            $hybridauth = $this->container->hybridauth;
            
            $adapter = $hybridauth->authenticate($provider);
            
            $user_profile = $adapter->getUserProfile();
            $accessToken = $adapter->getAccessToken();
            //var_dump($user_profile);
            //die();
            
            self::postSignUp($user_profile, $provider, $accessToken['access_token']);
            
            self::attempt($user_profile->email);
        } catch(\Exception $e){
            echo 'Oops, we ran into an issue! ' . $e->getMessage();
        }
    }
    
    public function attempt($email){
        $user = $this->container->auth->findUser($email);
        
        if($user){
            $_SESSION['user'] = $user->id;
            
            return true;
        }
        
        return false;
    }
    
    function postSignUp($user, $provider, $token){
        $userAccount;
        $existingUser = $this->container->auth->findUser($user->email);
        $userId;
        $socialId = $user->identifier;
        
        if($existingUser === null){
           $newUser = new \Client();
           $newUser->setEmail($user->email);
           $newUser->setName($user->firstName);
           $newUser->setSurname($user->lastName);
           $newUser->setTlf($user->phone);
           $newUser->setAdress($user->address);
           $newUser->setCity($user->city);
           $newUser->setCountryId("1");
           $newUser->setCardData("2");
           $newUser->setCountryName($user->country);
           $newUser->setSocialId($user->identifier);
           $newUser->setService($provider);
           $newUser->setToken($token);
           $newUser->save(); 
           
            $userAccount = $newUser;
        }else{
            $userAccount = $existingUser;
        }
        
        //$social = self::findSocialService($userAccount->id, $provider, $socialId);
        

    }
}