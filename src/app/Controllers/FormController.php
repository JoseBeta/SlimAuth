<?php

namespace App\Controllers;
use App\Models\User;
use Slim\Views\Twig as View;

class FormController extends Controller{    
    public function index($request, $response){        
        return $this->view->render($response, 'authForm.twig');
    }
    
    public function __invoke($request, $response, $next){
        if(isset($_SESSION['errors'])){
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
            unset($_SESSION['errors']);
        }
        
        $response = $next($request, $response);
        return $response;
    }
}