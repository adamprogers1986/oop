<?php
namespace Src\Admin\Parameters;

use PDO;
use mysqli;

class AdminSettings {

    protected $twig;
    protected $host; 
    protected $user;
    protected $password;
    protected $database;
    protected $type;

    public function setDatabase($type, $host, $database, $user, $password){
        switch ($type){
            case "PDO":
                try {
                    $conn = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $this->conn = $conn;
                return $this;
                break;
            case "mysqli":
                $conn = new mysqli($host, $user, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $this->conn = $conn;
                return $this;
            break;

            default:
                echo "you haven't set a database". die();
        }
    }
    
    public function getDatabase(){
        return $this->conn;
    }

    public function setTemplating($template, $location= null, $cache = null){
        switch ($template){
            case "twig":
            
            $loader = new \Twig_Loader_Filesystem($location);
            if ($cache != null){
                $this->template = new \Twig_Environment($loader, array(
                'cache' => $cache,
                ));
            }
            else{
                $this->template = new \Twig_Environment($loader, array(
                    //'cache' => $cache,
                ));
            }
           
            return $this;

        }
    }
    public function getTemplating(){
        
        return $this->template;
    }

}
