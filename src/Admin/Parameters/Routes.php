<?php

namespace Src\Admin\Parameters;


use Src\Site\Controller\MainController;
use Src\Site\Controller\SpecController;
use Src\Site\Controller\UnknownController;
use Src\Admin\Parameters\Routing;


Class Routes {

    public function setLinks($pdo, $mysqli, $twig) {

        $routing = new Routing();
      
        $specController = new SpecController();
        $mainController = new MainController();
      

        $routing->setRoute(
            $routing->setUrl("/admin"), array(
            $routing->setClass($mainController), 
            $routing->setFunction('index'),
            $routing->setDatabaseType($pdo),
            $routing->setTemplate($twig)
            )
        );

        $routing->setRoute(
            $routing->setUrl("/admin/one"),array( 
            $routing->setClass($specController), 
            $routing->setFunction('index'),
            $routing->setDatabaseType($pdo),
            $routing->setTemplate($twig)
            )

        );
        
        $this->routing = $routing->getRoute();
        return $this->routing;

    
    }

    public function getLinks(){
        return $this->routing;
    }

}
