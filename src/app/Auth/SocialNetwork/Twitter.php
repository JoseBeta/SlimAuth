<?php

namespace App\Auth\SocialNetwork;

class Twitter extends SocialNetwork{
    
    function twitterAuth($request, $response) {
        parent::auth("Twitter");
        
        $this->container->flash->addMessage('info', 'You have been signed up using Twitter!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
}