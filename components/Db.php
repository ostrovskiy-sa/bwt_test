<?php


class Db
{

    public static function getConnect(){
        $host = 'localhost';
        $dbname = 'db';
        $user = 'serge';
        $pass = 'pass777';

        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $db;
    }
}
