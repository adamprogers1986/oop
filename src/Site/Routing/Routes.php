<?php

namespace Src\Site\Routing;

use Src\Admin\Parameters\AdminRoutes;
use Src\Admin\Parameters\Routing;
use Src\Site\Controller\MainController;
class Routes Extends AdminRoutes{

    public function setRoutes(){
       $mainController = new MainController();
       $this->setAdminRoutes();
       $this->setRoute($this->setUrl("/"), $this->setFunction("index"), $this->setClass($mainController));

        return $this;
    }
    public function renderPage($databaseType, $templating){

        $url = $_SERVER['REQUEST_URI'];

        $function = $this->getRoute()[$url]['function'];
        $className = $this->getRoute()[$url]['class'];
        
        $class = new $className();
        return $class->$function($databaseType, $templating);
     
    }
}
