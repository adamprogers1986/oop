<?php

namespace Src\Parameters;

use PDO;
use mysqli;

class Db {

    public function __construct() {
        define('DB_HOST', "localhost");
        define('DB_USER', 'yousuckladygagasdick');
        define('DB_PASSWORD', "stopspyingonmyworkyoucunts");
        define('DB_DB', "test");
    }

    public function getPdo() {

        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DB, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $conn;
    }

    public function getMysqli() {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
   
        return $conn;
    }

}
