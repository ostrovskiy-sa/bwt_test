<?php

namespace controllers;

use models\Feed;
use core\Controller;

class FeedController extends Controller
{
    

    public function actionAddComment(){
        Feed::addComment();
        $this->view->generate('addcomment.php', 'template.php');
        return true;
    }

    public function actionComments(){
        $data = array();
        $data = Feed::commentsList();
        // require_once (ROOT.'/views/comments.php');
        // не передает $commentsList в comments.php
        $this->view->generate('comments.php', 'template.php', $data);
        return true;

    }
    
    
    
}
