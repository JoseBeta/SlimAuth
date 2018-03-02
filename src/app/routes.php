<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

$app->get('/', 'HomeController:index')->setName('home');
$app->get('/form', 'FormController:index')->setName('form');

$app->group('', function(){
    $this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
    $this->post('/auth/signup', 'AuthController:postSignUp');
    
    $this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
    $this->post('/auth/signin', 'AuthController:postSignIn');
    
    $this->get('/auth/signin/facebook', 'facebookAuth:facebookAuth')->setName('auth.signin.facebook');
    $this->get('/auth/signin/google', 'googleAuth:googleAuth')->setName('auth.signin.google');
    $this->get('/auth/signin/twitter', 'twitterAuth:twitterAuth')->setName('auth.signin.twitter');
})->add(new GuestMiddleware($container));

$app->group('', function(){
    $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');
    
    $this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
    $this->post('/auth/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddleware($container));