<?php 

namespace Src\Admin\Parameters;

use Src\Admin\Parameters\Routing;
use Src\Admin\Controller\AdminController;

class AdminRoutes Extends Routing{

    protected $routing = array();
    protected $url;
    protected $function;
    protected $class;
    public function __construct(){

        $adminController = new AdminController();
        $this->route = array();
        $this->route = $this->getRoutes();
        array_push($this->route, $this->setRoute($this->setUrl("/admin"),$this->setFunction("index"),$this->setClass($adminController)));
       // array_push($this->route,$this->setRoute($this->setUrl("/admin/edit/page"),$this->setFunction("some"),$this->setClass("new")));
  
        return $this->route;

    }

    public function addToRoutes($url, $function, $class){
        //array_push($this->route, $this->setUrl($url),array("function"=>$this->setFunction($function),"class"=>$this->setClass($class)));
        array_push($this->route,$this->setRoute($this->setUrl($url),$this->setFunction($function),$this->setClass($class)));
        return $this->route;
    }

    public function getAdminRoutes(){
       
        $url = parse_url($_SERVER['REQUEST_URI']);
       
      //  var_dump($this->getRoutes()["$url"]); 
        // $class =   new $this->route[$url]['class'](); 
        
        // $function = $this->route[$url]['function'];
        // $template = $this->route[$url]['template'];
        // $databaseType = $this->route[$url]['database'];
       
        //return $class->$function($databaseType, $template);
        

        //return $this->route;
    }

    

    
}