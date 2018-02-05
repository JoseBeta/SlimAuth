<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Facebook extends SocialNetwork{
    
    function facebookAuth() {
        parent::auth("Facebook");
    }
}