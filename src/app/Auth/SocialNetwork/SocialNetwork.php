<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;
use App\Models\User_social;

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
            $userCreated = User::create([
                'email'=>$user->email,
                'name'=>$user->firstName,
            ]);
            
            $userAccount = $userCreated;
        }else{
            $userAccount = $existingUser;
        }
        
        $social = self::findSocialService($userAccount->id, $provider, $socialId);
        
        if($social === null){
            self::postSocial($socialId, $userAccount, $provider, $token);
        }
    }
    
    public function findSocialService($userId, $service, $socialId){
        return User_social::where('user_id', $userId)->where('service', $service)->where('social_id', $socialId)->first();
    }
    
    function postSocial($socialId, $userAccount, $service, $token){
        $social = User_social::create([
            'social_id'=>$socialId,
            'user_id'=>$userAccount->id,
            'service'=>$service,
            'token'=>$token,
            'lastName'=>$userAccount->lastName,
            'phone'=>$userAccount->phone,
            'country'=>$userAccount->country,
            'city'=>$userAccount->city,
            'address'=>$userAccount->address,
        ]);
    }
}