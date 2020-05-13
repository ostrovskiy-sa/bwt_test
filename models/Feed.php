<?php

namespace models;

use components\Db;

class Feed
{
    public static function addComment(){
        session_start();
        
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
            $reg = "/^[a-zA-Z ]+$/";
            if (strlen($_POST['name'])>=2 && preg_match($reg, $_POST['name'])) {
                $name = $_POST['name'];
            }
            else {
                return false;
            }
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email'];
            }
            else {
                return false;
            }
            if (strlen($_POST['comment'])>=10) {
                $comment = $_POST['comment'];
            }
            else {
                return false;
            }
            
            $_SESSION['addcomment'] = false;
            $conn = Db::getConn();
            try {
                $sql = "INSERT INTO feedback (first_name, email, comment) VALUE ('$name', '$email', '$comment');";
                $result = $conn->query($sql);
            } catch (PDOException $e){
                $e->getMessage();
            }
            if($result) {
                $_SESSION['addcomment'] = true;
            }
        }
           
    }

    public static function commentsList(){
        $commentsList = array();
        $conn = Db::getConn();
        try {
            $sql = 'SELECT * FROM feedback';
            $result = $conn->query($sql);
            $i = 0;
            while($row= $result->fetch(\PDO::FETCH_ASSOC)){
                $commentsList[$i]['name'] = $row['first_name'];
                $commentsList[$i]['email'] = $row['email'];
                $commentsList[$i]['comment'] = $row['comment'];
                $i++;
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }    
        $commentsList = array_reverse($commentsList);
        return $commentsList;
    }
}
