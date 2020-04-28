<?php


class Controller
{


    public function actionRegistration(){
        require_once (ROOT.'/views/index.php');
    }

    public function actionWeather(){
        echo 'показываем погодку';
    }

    public function actionAddFeedback(){
        require_once (ROOT.'/views/feedform.php');
    }

    public function actionShowFeedbacks(){
        echo 'все фидбеки';
    }
    
}
