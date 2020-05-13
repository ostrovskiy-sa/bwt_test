<?php

namespace controllers;

use models\User;
use core\Controller;

class UserController extends Controller
{
    
    public function actionRegistration(){
        User::addUser();
        $this->view->generate('index.php', 'template.php');
        return true;
    }

    public function actionWeather(){
        $this->view->generate('weather.php', 'template.php');
        return true;
    }
    
    public function actionLogin(){
        $this->view->generate('login.php', 'template.php');
        User::loginUser();
        if(isset($_SESSION['login'])){
            header('Location: /weather');
        }
        return true;
    }
    public function actionLogout(){
        User::logoutUser();
        return true;
    }
    
}
