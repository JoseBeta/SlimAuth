<?php

namespace App\Auth\SocialNetwork;



class Facebook extends SocialNetwork{
    
    function facebookAuth($request, $response) {
        $adapter = parent::auth("Facebook");
        
        $user = parent::getUser($adapter);
        $token = parent::getAccessToken($adapter);
        self::postSignUpFacebook($user, $token);
        
        parent::attempt($user->identifier, "Facebook");

        $this->container->flash->addMessage('info', 'You have been signed up using Facebook!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
    
    function postSignUpFacebook($user, $token){
        $existUser = $this->container->auth->findUser($user->identifier, "Facebook");
        
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
            $newUser->setService("Facebook");
            $newUser->setToken($token);
            $newUser->save();
        }
    }
}