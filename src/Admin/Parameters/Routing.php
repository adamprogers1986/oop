<?php 

namespace Src\Admin\Parameters;

class Routing {

    protected $class;
    protected $function;
    protected $route;

    
    public function setClass($class){
        $this->class = $class;
        return $this;
    }
    public function getClass(){
        return $this->class;
    }
    public function setFunction($function){
        $this->function = $function;
        return $this;
    }
    public function getFunction(){
        return $this->function;
    }
    public function setUrl($url){
        $this->url = $url;
        return $this;
    }
    public function getUrl(){
        return $this->url;
    }

    public function setRoute(){
        $this->route[$this->getUrl()] = array("url"=>$this->getUrl(),"function"=>$this->getFunction(), "class"=>$this->getClass());
      
        return $this->route;
    }
    public function getRoutes(){
        
        return $this->route;
    }


}