<?php 

namespace Src\Admin\Parameters;

class Routing {

    protected $class;
    protected $function;
    protected $route;
    protected $database;
    protected $template;
    
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
    public function setDataBase($database){
        $this->database = $database;
        return $this;
    }

    public function getDatabase(){
        return $this->database;
    }

    public function setTemplate($template){
        $this->template = $template;
        return $this;
    }

    public function getTemplate(){
        return $this->template;
    }
    
    public function setRoute(){
        $this->route[$this->getUrl()]= array("url"=>$this->getUrl(), "function"=>$this->getFunction(), "class"=> $this->getClass());
        
        return $this;
    }
   
    public function getRoute(){
        
        return $this->route;
    }

    


}