<?php

namespace controllers;

use models\Feed;
use core\Controller;
use core\View;

class FeedController extends Controller
{
    public function __construct()
    {
        $this->model = new Feed();
        $this->view = new View();
    }

    public function actionAddComment()
    {
        $this->model->addItem();
        $this->view->generate('addcomment.php', 'template.php');
        return true;
    }

    public function actionShowComments()
    {
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: /login');
        } else {
            $data = array();
            $data = $this->model->commentsList();
            $this->view->generate('comments.php', 'template.php', $data);
            return true;
        }
    }            
}
