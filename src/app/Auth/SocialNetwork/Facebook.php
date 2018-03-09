<?php

namespace App\Auth\SocialNetwork;



class Facebook extends SocialNetwork{
    
    function facebookAuth($request, $response) {
        $adapter = parent::auth("Facebook");
        
        $user = parent::getUser($adapter);
        $token = parent::getAccessToken($adapter);
        self::postSignUpFacebook($user, $token);
        
        parent::attempt($user->email);

        $this->container->flash->addMessage('info', 'You have been signed up using Facebook!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
    
    function postSignUpFacebook($user, $token){
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
            $newUser->setService("Facebook");
            $newUser->setToken($token);
            $newUser->save();
            
            $userAccount = $newUser;
        }else{
            $userAccount = $existingUser;
        }
    }
}