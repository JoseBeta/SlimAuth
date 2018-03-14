<?php

namespace App\Auth\SocialNetwork;



class Google extends SocialNetwork{
    
    function googleAuth($request, $response) {
        $adapter = parent::auth("Google");
        
        $user = parent::getUser($adapter);
        $token = parent::getAccessToken($adapter);
        self::postSignUpGoogle($user, $token);
        
        parent::attempt($user->identifier, "Google");
        
        $this->container->flash->addMessage('info', 'You have been signed up using Google+!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
    
    
    function postSignUpGoogle($user, $token){
        $existUser = $this->container->auth->findUser($user->identifier, "Google");    
        
        
        if($existUser === null){
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
            $newUser->setService("Google");
            $newUser->setToken($token);
            $newUser->save();
        }
    }
}