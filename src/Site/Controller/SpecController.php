<?php

namespace Src\Site\Controller;

use Src\Site\Model\Address as Address;
use Src\Site\Model\Csv as Csv;

use PDO;

class SpecController {

    public function index($mysqli, $twig) {

        
        $hello = "hello";
        
        return $twig->render('specifications/index.html.twig', array('name' => 'Fabien'));
    }

}
