<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Google extends SocialNetwork{
    
    function googleAuth($request, $response) {
        parent::auth("Google");
        
        $this->container->flash->addMessage('info', 'You have been signed up using Google+!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
}