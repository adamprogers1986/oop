<?php 

namespace Src\Admin\Controller;

use Src\Admin\Parameters\AdminSettings;

use PDO;

class AdminController {

    public function index($mysqli, $twig) {

        $settings = new AdminSettings();
        $settings->setTemplating("twig", "../src/Site/Twig", "");
        $twig = $settings->getTemplating();
        
        echo $twig->render('homepage/index.html.twig', array('name' => 'Fabien'));
    }

}
