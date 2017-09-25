<?php

namespace Src\Routes;

use Src\Views\Frontpage;
use Src\Controller\MainController;


Class Routing {

    public function __construct() {
        
        if ($_SERVER['SERVER_NAME'] =="localhost"){
           $link = $_SERVER['REQUEST_URI'];
           $url = explode('/', $link);
           unset($url[1]);
           $url = implode("/", $url);
           $this->route = $url;
           
        }
        else{
           $this->route = $_SERVER['REQUEST_URI'];
        }
        
    }
   
    public function getRoute() {
        return $this->route;
    }

    public function getLinks($pdo, $mysqli) {

        $url = $this->route;

        switch ($url) {
            case "/hello":
                return "hello";
                break;
            case "/":
                $page = new MainController();
                return $page->index($mysqli);
                break;
            default:
                return "$url page not found";
        }
    
    }
}
