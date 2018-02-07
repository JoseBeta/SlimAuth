<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as v;

class AuthController extends Controller{
    public function getSignOut($request, $response){
        $this->auth->logout();
        
        return $response->withRedirect($this->router->pathFor('home'));
    }
    
    public function getSignIn($request, $response) {
        return $this->view->render($response, 'auth/signin.twig');
    }
    
    public function postSignIn($request, $response){
          $auth = $this->auth->attempt(
              $request->getParam('email'),
              $request->getParam('password')
          );
          
          if(!$auth){
              $this->flash->addMessage('error','Could not sign you in with those details.' );
              
              return $response->withRedirect($this->router->pathFor('auth.signin'));
          }
          
          return $response->withRedirect($this->router->pathFor('home'));
    }
    
    public function getSignUp($request, $response){
        return $this->view->render($response, 'auth/signup.twig');
    }
    
    public function postSignUp($request, $response){
        $validation = $this->validator->validate($request,[
            'email'=> v::noWhitespace()->notEmpty()->email()->emailAvailable(),
            'name'=> v::notEmpty()->alpha(),
            'password'=> v::notEmpty(),
        ]);
        
        if($validation->failed()){
            return $response->withRedirect($this->router->pathFor('auth.signup'));
        }
        
        $existingUser = $this->container->auth->findUser($request->getParam('email'));
        
        if($existingUser === null){
            $user = User::create([
                'email'=>$request->getParam('email'),
                'name'=>$request->getParam('name'),
                'password'=>password_hash($request->getParam('password'), PASSWORD_DEFAULT)
            ]);
        }else{
            $existingUser->setPassword($request->getParam('password'));
        }
        
        
        $this->flash->addMessage('info', 'You have been signed up!');
        
        $this->container->auth->attempt($request->getParam('email'), $request->getParam('password'));
        
        return $response->withRedirect($this->router->pathFor('home'));
    }
}