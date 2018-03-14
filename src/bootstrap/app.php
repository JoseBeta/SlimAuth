<?php

use Respect\Validation\Validator as v;

session_start();

require __DIR__ . '/../vendor/autoload.php';
require_once '../vendor/propel/propel1/runtime/lib/Propel.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetals' => true,
    ],
    ]);

$capsule = Propel::init('../app/Models/build/conf/auth-conf.php');

$container = $app ->getContainer();

$container['db'] = function($container) use ($capsule){
    return $capsule;
};

set_include_path("../app/Models/build/classes" . PATH_SEPARATOR . get_include_path());


$container['view'] = function($container){
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache'=>false,
    ]);
    
    $view -> addExtension(new \Slim\Views\TwigExtension(
            $container->router,
            $container->request->getUri()
        ));
    
    $view->getEnvironment()->addGlobal('auth', [
        'check' => $container->auth->check(),
        'user' => $container->auth->user(),
    ]);
    
    $view->getEnvironment()->addGlobal('flash', $container->flash);
    
    return $view;
};

$container['validator'] = function($container){
    return new App\Validation\Validator;
};

$container['fillValidator'] = function($container){
    return new App\Validation\FillValidator;
};

$container['HomeController'] = function($container){
    return new \App\Controllers\HomeController($container);
};

$container['AuthController'] = function($container){
    return new \App\Controllers\Auth\AuthController($container);
};

$container['PasswordController'] = function($container){
    return new \App\Controllers\Auth\PasswordController($container);
};

$container['FormController'] = function($container){
    return new \App\Controllers\FormController($container);
};

$container['csrf'] = function($container){
    return new \Slim\Csrf\Guard;
};

$container['auth'] = function($container){
    return new \App\Auth\Auth($container);
};

$container['flash'] = function($container){
    return new \Slim\Flash\Messages;
};

$container['hybridauth'] = function(){
    return new Hybrid_Auth('config.php');
};


$container['facebookAuth'] = function($container){
    return new \App\Auth\SocialNetwork\Facebook($container);
};

$container['twitterAuth'] = function($container){
    return new \App\Auth\SocialNetwork\Twitter($container);
};

$container['googleAuth'] = function($container){
    return new \App\Auth\SocialNetwork\Google($container);
};


$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));
$app->add(new \App\Middleware\AutoFillMiddleware($container));

$app->add($container->csrf);

v::with('App\\Validation\\Rules');

require __DIR__ . '/../app/routes.php';