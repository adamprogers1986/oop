<?php

namespace Src\Site\Controller;

class UnknownController {

    public function index($twig) {


        
        $hello = "hello";
        
        return $twig->render('404/index.html.twig', array('name' => 'Fabien'));
    }

}
