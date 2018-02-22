<?php 

namespace Src\Admin\Model;

Class Page{
    protected $id;
    protected $name;
    protected $text;
    protected $carousel;
    
    public function getId(){
        
        return $this;
    }

    public function getName(){
        return $this;
    }

    public function getText(){
        return $this;
    }

    public function getCarousel(){
        return $this->carousel;
        
    }

    public function setName($name){
        $this->name = $name;
        
    }

    public function setText($text){
        $this->text = $text;
       
    }

    public function setCarousel($carousel){
        $this->carousel = $carousel;
        
    }
}
