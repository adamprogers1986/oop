<?php

namespace Src\Site\Parameters;


use Src\Site\Controller\MainController;
use Src\Site\Controller\SpecController;
use Src\Site\Controller\UnknownController;
use Src\Admin\Parameters\Routing;
use Src\Admin\Parameters\Routes as AdminRoutes;

Class Routes Extends AdminRoutes{

    
    public function setLinks($pdo, $mysqli, $twig) {


        $routing = new Routing();

        $specController = new SpecController();
        $mainController = new MainController();
      

        $routing->setRoute(
            $routing->setUrl("/"), array(
            $routing->setClass($mainController), 
            $routing->setFunction('index'),
            $routing->setDatabaseType($pdo),
            $routing->setTemplate($twig)
            )
        );

        $routing->setRoute(
            $routing->setUrl("/specifications"),array( 
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
