<?php


class Db
{

    public static function getConnect(){
        $host = 'localhost';
        $dbname = 'db';
        $user = 'serge';
        $pass = 'pass777';

        $mysqli = new mysqli($host, $user, $pass, $dbname);
        return $mysqli;
    }
}
