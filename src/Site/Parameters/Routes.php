<?php

namespace Src\Site\Parameters;


use Src\Site\Controller\MainController;
use Src\Site\Controller\SpecController;
use Src\Site\Controller\UnknownController;
use Src\Admin\Parameters\Routing;


Class Routes {

    public function getLinks($pdo, $mysqli, $twig) {

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
        
        // $adminRouting->setUnknown(
        //     $adminRouting->setClass($unknownController), 
        //     $adminRouting->setFunction('index'),
        //     $adminRouting->setTemplate($twig)
        // );

        return $routing->getRoute();

    
}
}
