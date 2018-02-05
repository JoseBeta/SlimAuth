<?php

namespace App\Auth\SocialNetwork;

use App\Models\User;

class Google extends SocialNetwork{
    
    function googleAuth() {
        parent::auth("Google");
    }
}