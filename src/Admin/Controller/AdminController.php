<?php 

namespace Src\Admin\Controller;


use PDO;

class AdminController {

    public function index($mysqli, $twig) {

        $hello = "hello";
        
        return $twig->render('homepage/index.html.twig', array('name' => 'Fabien'));
    }

}
