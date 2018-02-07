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
        $existingUser = $this->container->auth->findUser($user->email);
        $userId;
        $socialId = $user->identifier;
        
        if($existingUser === null){
            $userCreated = User::create([
                'email'=>$user->email,
                'name'=>$user->firstName,
                'lastName'=>$user->lastName,
                'phone'=>$user->phone,
                'country'=>$user->country,
                'city'=>$user->city,
                'address'=>$user->address,
            ]);
            
            $userId = $userCreated->id;
        }else{
            $userId = $existingUser->id;
        }
        
        $social = self::findSocialService($userId, $provider, $socialId);
        
        if($social === null){
            self::postSocial($socialId, $userId, $provider, $token);
        }
    }
    
    public function findSocialService($userId, $service, $socialId){
        return User_social::where('user_id', $userId)->where('service', $service)->where('social_id', $socialId)->first();
    }
    
    function postSocial($socialId, $userId, $service, $token){
        $social = User_social::create([
            'social_id'=>$socialId,
            'user_id'=>$userId,
            'service'=>$service,
            'token'=>$token,
        ]);
    }
}