<?php

namespace Src\Admin\Parameters;

Class Routing {

    protected $url;
    protected $class;
    protected $routename;
    protected $databaseType;
    protected $template;
    protected $isAdmin;

    public function getAddress(){
        $request = parse_url($_SERVER['REQUEST_URI']);
        $path = $request["path"];
        $trimmed = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');
        $exploded = explode('/', $trimmed);
        $result = '/'.implode('/', $exploded);
        return $result;
    }
    
    public function setRouteName($routename){
        $this->routename = $routename;
        return $this;
    }

    public function getRouteName(){
        return $this->routename;
    }

    public function setFunction($function){
        $this->function = $function;
        return $this;
    }

    public function getFunction(){
        return $this->function;
    }

    public function setDatabaseType($databaseType){
        $this->databaseType = $databaseType;
        return $this;
    }

    public function getDatabaseType(){
        return $this->databaseType;
    }
    public function setTemplate($template){
        $this->template = $template;
        return $this;
    }

    public function getTemplate(){
        return $this->template;
    }

    public function setUrl($url){
        $this->url = $url;
        return $this;
    }

    public function getUrl(){
        return $this->url;
    }
    public function setClass($class){
        $this->class = $class;
        return $this;
    }

    public function getClass(){
        return $this->class;
    }

    public function setUnknown(){
        $this->unknown = array('class'=>$this->getClass(), 'function'=>$this->getFunction(), 'template'=>$this->getTemplate());
    }

    public function setIsAdmin($isAdmin){
        $this->isAdmin = $isAdmin;
        return $isAdmin;
    }

    public function getIsAdmin(){
        return $this;
    }
    
    public function setRoute(){
        $this->route[$this->getUrl()] = array('url'=>$this->getUrl(), 'class'=>$this->getClass(), 'function'=>$this->getFunction(), 'template'=>$this->getTemplate(), 'databaseType'=>$this->getDatabaseType(), 'isAdmin'=>$this->getIsAdmin());
        return $this;
    }

    public function getRoute() {
      
        $address = $this->getAddress();
        $class =   new $this->route[$address]['class'](); 
        
        $function = $this->route[$address]['function'];
        $template = $this->route[$address]['template'];
        $databaseType = $this->route[$address]['databaseType'];
        $isAdmin = $this->route[$address]['isAdmin'];

        return $class->$function($databaseType, $template, $isAdmin);

        }
              

    }

