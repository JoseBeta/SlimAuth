<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class FormController extends Controller{    
    public function index($request, $response){   
        return $this->view->render($response, 'form.twig');
    }
}