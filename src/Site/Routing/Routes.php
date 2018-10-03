<?php

namespace Src\Site\Routing;

use Src\Admin\Parameters\AdminRoutes;
use Src\Admin\Parameters\Routing;

class Routes Extends AdminRoutes{

    public function setRoutes(){
        $this->setAdminRoutes();
      //  $this->setRoute($this->setUrl("/"));

        return $this;
    }
    public function renderPage($databaseType, $templating){

        $url = $_SERVER['REQUEST_URI'];
var_dump($templating);
        $function = $this->getRoute()[$url]['function'];
        $className = $this->getRoute()[$url]['class'];
        
        $class = new $className();
        return $class->$function($databaseType, $templating);
     
    }
}
