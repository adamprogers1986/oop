<?php 

namespace Src\Admin\Parameters;

use Src\Admin\Parameters\Routing;
use Src\Admin\Controller\MainController;

class AdminRoutes Extends Routing{

    protected $routing = array();
    protected $url;
    protected $function;
    protected $class;
    public function __construct(){

        $this->route = array();
        $this->route = $this->getRoutes();
        array_push($this->route,$this->setRoute($this->setUrl("/"),$this->setFunction("some"),$this->setClass("new")));
       // array_push($this->route,$this->setRoute($this->setUrl("/admin/edit/page"),$this->setFunction("some"),$this->setClass("new")));
  
        return $this->route;

    }

    public function addToRoutes($url, $function, $class){
        //array_push($this->route, $this->setUrl($url),array("function"=>$this->setFunction($function),"class"=>$this->setClass($class)));
        array_push($this->route,$this->setRoute($this->setUrl($url),$this->setFunction($function),$this->setClass($class)));
        return $this->route;
    }

    public function getAdminRoutes(){
        
        return $this->route;
    }

    
}