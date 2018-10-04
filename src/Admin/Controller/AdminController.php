<?php 

namespace Src\Admin\Controller;


use PDO;

class AdminController {

    public function index($mysqli, $twig) {

       echo $twig->render('homepage/index.html.twig', array('name' => 'Fabien'));
    }

}
