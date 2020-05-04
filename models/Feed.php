<?php


class Feed
{

    public static function addComment(){
        $name = $email = $comment = $norobot = '';
        session_start();
        
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
            
            $reg = "/^[a-zA-Z]+$/";
            if (strlen($_POST['name'])>=2 && preg_match($reg, $_POST['name'])){
                $name = $_POST['name'];
            }
            else{
                return false;
            }
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $email = $_POST['email'];
            }
            else{
                return false;
            }
            if (strlen($_POST['comment'])>=10){
                $comment = $_POST['comment'];
            }
            else{
                return false;
            }
            
            $_SESSION['addcomment'] = false;
            $mysqli = Db::getConnect();
            $sql = "INSERT INTO feedback (first_name, email, comment) VALUE ('$name', '$email', '$comment');";
            $result = $mysqli->query($sql);
            $mysqli->close();
            if($result){
                $_SESSION['addcomment'] = true;
            }
        }
           
    }

    public static function commentsList(){
        $commentsList = array();
        $mysqli = Db::getConnect();
        $sql = 'SELECT * FROM feedback';
        $result = $mysqli->query($sql);

        $i = 0;
        while($row= $result->fetch_assoc()){
            $commentsList[$i]['name'] = $row['first_name'];
            $commentsList[$i]['email'] = $row['email'];
            $commentsList[$i]['comment'] = $row['comment'];
            $i++;
        }
        $mysqli->close();
        $commentsList = array_reverse($commentsList);
        return $commentsList;
    }
}
