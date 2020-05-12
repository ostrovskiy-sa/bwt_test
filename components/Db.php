<?php

namespace components;

class Db
{
    private static $instance;

    private function __construct() {}
    private function __clone () {}
	private function __wakeup () {}

	public static function getConn() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO('mysql:host=localhost;dbname=db', 'serge', 'pass777');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } 
        return self::$instance;
    }
}
