<?php


class Db
{

    public static function getConnect(){
        $host = 'localhost';
        $dbname = 'db';
        $user = 'serge';
        $pass = 'pass777';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        return $conn;
    }
}
