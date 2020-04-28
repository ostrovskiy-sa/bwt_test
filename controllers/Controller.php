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
        echo 'форма фидбека';
    }

    public function actionShowFeedbacks(){
        echo 'все фидбеки';
    }
    
}
