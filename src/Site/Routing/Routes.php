<?php

namespace Src\Site\Routing;

use Src\Admin\Parameters\AdminRoutes;
use Src\Admin\Parameters\Routing;

class Routes Extends AdminRoutes{

    public function setRoutes(){
        $this->setAdminRoutes();
  

        return $this;
    }
    public function getAllRoutes(){

        $url = $_SERVER['REQUEST_URI'];


    var_dump($this->getRoutes());
        // foreach ($this->getRoutes() as $urls){
        //     var_dump($urls['/admin']);
        // }
        // foreach ($this->getRoutes() as $route ){
        //     var_dump($route);
        //     if (isset($route[$url])){
        //     var_dump($route[$url]);
        //     }
        //     else{
        //         echo "There is no page you gay"; die();
        //     }
        // }
        //var_dump($this->getRoutes());
        return $this;



      //  var_dump($this->getRoutes()["$url"]);
        // $class =   new $this->route[$url]['class']();

        // $function = $this->route[$url]['function'];
        // $template = $this->route[$url]['template'];
        // $databaseType = $this->route[$url]['database'];

        //return $class->$function($databaseType, $template);


        //return $this->route;
    }
}
