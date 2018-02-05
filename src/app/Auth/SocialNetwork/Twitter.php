<?php

namespace App\Auth\SocialNetwork;

class Twitter extends SocialNetwork{
    
    function twitterAuth() {
        parent::auth("Twitter");
    }
}