<?php

namespace components;

use controllers\UserController;
use controllers\FeedController;

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/components/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $url = $this->getURI();
        $pageFound = false;
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~^$uriPattern$~", $url)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));
                if ($controllerName == 'UserController') {
                    $controller = new UserController();
                } else {
                    $controller = new FeedController();
                }
                // вместо конструкции if хотел этот код использовать, но почему-то не срабатывает
                // $controller = new $controllerName();
                $controller->$actionName();
                $pageFound = true;
            }
        }
        if (!$pageFound) {
            echo "<h1>Error 404. Sory, page not found</h1>";
        }        
    }
} 
