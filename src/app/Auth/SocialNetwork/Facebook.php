<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Facebook extends SocialNetwork{
    
    function facebookAuth($request, $response) {
        parent::auth("Facebook");
        
        $this->container->flash->addMessage('info', 'You have been signed up using Facebook!');
        return $response->withRedirect($this->container->router->pathFor('home'));
    }
}