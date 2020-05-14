<?php

namespace models;

use components\Db;

class User
{
    public function addItem()
    {
        $gender = '';
        $birthday = '';
        
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
            $reg = "~^[a-zA-Z ]+$~";
            if (strlen($_POST['name']) >= 2 && preg_match($reg, $_POST['name'])) {
                $name = $_POST['name'];
            } else {
                return false;
            }
            if (strlen($_POST['surname']) >= 2 && preg_match($reg, $_POST['surname'])) {
                $surname = $_POST['surname'];
            } else {
                return false;
            }
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email'];
            } else{
                return false;
            }
            if (isset($_POST['gender'])) {
                $gender = $_POST['gender'];
            }
            if (isset($_POST['birthday'])) {
                $birthday = $_POST['birthday'];
            }

            $pdo = Db::getConn();
            try {
                $sql = "SELECT * FROM users WHERE email='$email'";
                $res = $pdo->query($sql);
                $user = $res->fetch();
                if ($user) {
                    $_SESSION['result'] = false;
                    return false;
                } else {
                    $_SESSION['result'] = true;
                }
                $sql = "INSERT INTO users (first_name, last_name, email, gender, date_of_birth) VALUES ('$name', '$surname', '$email', '$gender', '$birthday')";
                $pdo->exec($sql);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }

    public function loginUser()
    {
        $pdo = Db::getConn();
        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            try {
                $sql = "SELECT * FROM users WHERE first_name='$name' and email='$email'";
                $res = $pdo->query($sql);
                $user = $res->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
            if($user){
                $_SESSION['login'] = 1;
            }
        }
    }

    public function logoutUser()
    {
        unset($_SESSION['login']);
        session_destroy();
        header('Location: /login');
        exit;
    }
}
