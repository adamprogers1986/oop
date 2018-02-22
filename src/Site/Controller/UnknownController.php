<?php

namespace Src\Site\Controller;

class UnknownController {

    public function index($twig) {

        
//        $stmt = $conn->prepare("SELECT * FROM hello");
//        $stmt->execute();

// set the resulting array to associative
//        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        $hello = "hello";
        
        return $twig->render('404/index.html.twig', array('name' => 'Fabien'));
    }

}
