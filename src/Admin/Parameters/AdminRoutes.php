<?php 

namespace Src\Admin\Parameters;

use Src\Admin\Parameters\Routing;
use Src\Admin\Controller\AdminController;

class AdminRoutes Extends Routing{

    protected $routing = array();
    protected $url;
    protected $function;
    protected $class;
    public function setAdminRoutes(){

        $adminController = new AdminController();
    //    $this->route = array();
        $this->setRoute($this->setUrl("/adminssss/a", $this->setFunction("index")));
        $this->setRoute($this->setUrl("/admin"), $this->setFunction("index"));
        //$this->setRoute();
        
        return $this;

    }

    public function addToRoutes($url, $function, $class){
        $this->setRoute($this->setUrl($url),$this->setFunction($function),$this->setClass($class));
        return $this;
    }

    public function getRoutes(){
        return $this;
    }

    

    

    
}