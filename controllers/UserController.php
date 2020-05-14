<?php

namespace controllers;

use models\User;
use core\View;
use core\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model = new User();
        $this->view = new View();
    }
    
    public function actionRegistration()
    {
        $this->model->addItem();
        $this->view->generate('registration.php', 'template.php');
        return true;
    }

    public function actionWeather()
    {
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: /login');
        } else {
            $this->view->generate('weather.php', 'template.php');
            return true;
        }
        
    }
    
    public function actionLogin()
    {
        session_start();
        $this->view->generate('login.php', 'template.php');
        $this->model->loginUser();
        if (isset($_SESSION['login'])) {
            header('Location: /weather');
        }
        return true;
    }

    public function actionLogout()
    {
        session_start();
        $this->model->logoutUser();
        return true;
    }
}
