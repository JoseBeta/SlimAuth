<?php

namespace App\Auth;

class Auth{
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    public function user(){
        if(isset($_SESSION['user'])){
            $client = \ClientQuery::create()
            ->filterById($_SESSION['user'])
            ->find();
            
            return $client->getFirst();
        }
    }
    
    public function check(){
        return isset($_SESSION['user']);
    }
    
    public function findUser($socialID, $service){
        $client = \ClientQuery::create()
        ->filterByService($service)
        ->filterBySocialId($socialID)
        ->find();
        
        return $client->getFirst();
    }
    
    public function logout(){
        unset($_SESSION['user']);
        $this->container->hybridauth->logoutAllProviders();
    }
}