<?php
include ROOT.'/models/Feed.php';
include ROOT.'/models/User.php';


class Controller
{


    public function actionRegistration(){
        User::addUser();
        require_once (ROOT.'/views/index.php');
        return true;
    }

    public function actionWeather(){
        echo 'показываем погодку';
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
    
}
