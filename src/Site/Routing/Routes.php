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
    public function getAllRoutes(){

        $url = $_SERVER['REQUEST_URI'];

       var_dump($this->getRoute()[$url]['function']);
      
       
       // return $this;



      //  var_dump($this->getRoutes()["$url"]);
        // $class =   new $this->route[$url]['class']();

        // $function = $this->route[$url]['function'];
        // $template = $this->route[$url]['template'];
        // $databaseType = $this->route[$url]['database'];

        //return $class->$function($databaseType, $template);


        //return $this->route;
    }
}
