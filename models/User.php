<?php

class User
{

    public static function addUser(){
        $name = $surname = $email = $gender = $birthday = '';
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
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
