<?php

class User
{
    
    public static function addUser(){
        $name = $surname = $email = $gender = $birthday = '';
        
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
            $reg = "/^[a-zA-Z]+$/";
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

            $mysqli = Db::getConnect();
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($mysqli, $sql) or die(mysqli_error($conn));
            $count = mysqli_num_rows($result);

            if($count != 0){
                $_POST['result'] = false;
                return false;
            }else{
                $_POST['result'] = true;
            }
            $sql = "INSERT INTO users (first_name, last_name, email, gender, date_of_birth) VALUES ('$name', '$surname', '$email', '$gender', '$birthday')";
            $result = $mysqli->query($sql);
            $mysqli->close();
            
        }
           
    }

    public static function loginUser(){
        session_start();
        $conn = Db::getConnect();
        if(isset($_POST['name']) && isset($_POST['email'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "SELECT * FROM users WHERE first_name='$name' and email='$email'";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $count = mysqli_num_rows($result);

            if($count == 1){
                $_SESSION['login'] = 1;
            }

        }
    }
}