<?php

namespace controllers;

use models\Feed;
use models\User;

class Controller
{
    public function actionRegistration(){
        User::addUser();
        require_once (ROOT.'/views/index.php');
        return true;
    }

    public function actionWeather(){
        require_once (ROOT.'/views/weather.php');
    }

    public function actionAddFeedback(){
        Feed::addComment();
        require_once (ROOT.'/views/feedform.php');
        return true;
    }

    public function actionShowFeedbacks(){
        $commentsList = array();
        $commentsList = Feed::commentsList();
        require_once (ROOT.'/views/comments.php');
        return true;

    }
    
    public function actionLogin(){
        require_once (ROOT.'/views/login.php');
        User::loginUser();
        if(isset($_SESSION['login'])){
            header('Location: /weather');
        }
        return true;
    }
    public function actionLogout(){
        require_once (ROOT.'/views/logout.php');
        return true;
    }
    
}
