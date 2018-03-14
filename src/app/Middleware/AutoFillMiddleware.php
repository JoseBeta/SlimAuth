<?php

namespace App\Middleware;

use Respect\Validation\Validator as v;
use App\Validation\FillValidator;

class AutoFillMiddleware extends Middleware{
    public function __invoke($request, $response, $next){
        $_SESSION['fill'] = $this->container->auth->user();
        
        if(isset($_SESSION['fill'])){
            $fill = [
                'name' => $_SESSION['fill']->name,
                'surname' => $_SESSION['fill']->surname,
                'email'=> $_SESSION['fill']->email,
                'tlf'=> $_SESSION['fill']->tlf,
                'country_name'=> $_SESSION['fill']->country_name,
                'city'=> $_SESSION['fill']->city,
                'adress'=> $_SESSION['fill']->adress
            ];
        }
        
        if(isset($fill)){
            $validation = $this->container->fillValidator->validate($fill ,[
                'name'=> v::notEmpty(),
                'surname'=> v::notEmpty(),
                'email'=> v::noWhitespace()->notEmpty(),
                'tlf'=> v::notEmpty(),
                'country_name'=> v::notEmpty(),
                'city'=> v::notEmpty(),
                'adress'=> v::notEmpty(),
            ]);
        }
        
        if(isset($_SESSION['fill'])){
            $this->container->view->getEnvironment()->addGlobal('fill', $_SESSION['fill']);
            unset($_SESSION['fill']);
        }
        
        if(isset($_SESSION['fillErrors'])){
            $this->container->view->getEnvironment()->addGlobal('fillErrors', $_SESSION['fillErrors']);
            unset($_SESSION['fillErrors']);
        }
        
        $response = $next($request, $response);
        return $response;
    }
}