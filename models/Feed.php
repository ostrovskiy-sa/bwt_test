<?php


class Feed
{

    public static function addComment(){
        $name = $email = $comment = '';
        
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
                $name = $_POST['comment'];
            }
            else{
                return false;
            }
            $connect = Db::getConnect();
            $sql = "INSERT INTO feedback (first_name, email, comment) VALUE ('$name', '$email', '$comment');";
            $connect->multi_query($sql);
            $connect->close();
        }
           
    }
}
