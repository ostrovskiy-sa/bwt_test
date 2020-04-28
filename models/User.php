<?php

class User
{

    public static function addUser(){
        $name = $surname = $email = $gender = $birthday = '';
        
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
            $reg = "/^[a-z]+$/";
            if (strlen($_POST['name'])>=2 && preg_match($reg, $_POST['name'])){
                $name = $_POST['name'];
            }
            else{
                return false;
            }
            if (strlen($_POST['surname'])>=2 && preg_match($reg, $_POST['surname'])){
                $surname = $_POST['surname'];
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
            if (isset($_POST['gender'])) {
                $gender = $_POST['gender'];
            }
            if (isset($_POST['birthday'])) {
                $birthday = $_POST['birthday'];
            }

            $query = "INSERT INTO users (first_name, last_name, email, gender, date_of_birth) VALUES ('$name', '$surname', '$email', '$gender', '$birthday')";
            $connect = Db::getConnect();
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
        }
           
    }
}
