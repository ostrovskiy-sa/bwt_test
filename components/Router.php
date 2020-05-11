<?php

namespace components;

use controllers\Controller;

class Router
{
    private $routes;

    public function __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI(){
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }

    public function run(){
        
        $url = $this->getURI();
        $pageFound = false;
        
        foreach ($this->routes as $uriPattern => $path){
            if (preg_match("~^$uriPattern$~", $url)){
                $pageFound = true;
                $actionName = 'action'.$path;
                $controllerObject = new Controller();
                $controllerObject->$actionName();
                
            }
            
        }
        if (!$pageFound){
            echo "404 page not found";
        }
        
        
        
        
    
        
        
        
        
    }
} 





