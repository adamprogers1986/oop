<?php

namespace Src\Site\Controller;

use Src\Site\Model\Address as Address;
use Src\Site\Model\Csv as Csv;

use PDO;

class MainController {

    public function index($mysqli, $twig) {

        
//        $stmt = $conn->prepare("SELECT * FROM hello");
//        $stmt->execute();

// set the resulting array to associative
//        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        $hello = "hello";
        
        return $twig->render('homepage/index.html.twig', array('name' => 'Fabien'));
    }

}
