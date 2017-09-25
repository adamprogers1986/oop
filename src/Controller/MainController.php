<?php

namespace Src\Controller;

use Src\Model\Address as Address;
use Src\Model\Csv as Csv;
use Src\Views\FrontPage as FrontPage;
use PDO;

class MainController {

    public function index($mysqli) {

        
//        $stmt = $conn->prepare("SELECT * FROM hello");
//        $stmt->execute();

// set the resulting array to associative
//        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        $hello = "hello";
        $frontpage = new FrontPage();
        return $frontpage->index($hello);
    }

}
