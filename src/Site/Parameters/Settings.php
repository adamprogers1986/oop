<?php
namespace Src\Site\Parameters;

use PDO;
use mysqli;
use Src\Site\Parameters\Routes;
use Src\Admin\Parameters\Routes as AdminRoute;


class Settings {

    protected $twig;
    public function __construct() {
        define('DB_HOST', "localhost");
        define('DB_USER', 'morty');
        define('DB_PASSWORD', "Adrog_2016");
        define('DB_DB', "test");
    }

    public function setTwig($twig){
        $this->twig = $twig;
        return $twig;
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

    public function getTwig(){
        $twig = $this->twig;
        $loader = new \Twig_Loader_Filesystem($twig);
        $twig = new \Twig_Environment($loader, array(
        //'cache' => '../src/cache',
        ));
        return $twig;
    }
    
    public function setAllRoutes($pdo, $mysqli, $twig){
            $routes = new Routes();
            $adminRoutes = new AdminRoute();

            $this->links = $routes->getLinks($pdo, $mysqli, $twig);
            return $this->links;
    }

   

}
