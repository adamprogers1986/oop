<?php 
namespace Src\Admin\Controller;
use Src\Admin\Parameters\AdminSettings;
use PDO;
session_start();
class AdminController {

    private $twig;
    public function __construct(){
        $settings = new AdminSettings();
        $settings->setTemplating("twig", "../src/Admin/Twig", "");
       
        $twig = $settings->getTemplating();

        if( !isset( $_SESSION['login'] ) ) {
           $twig->display('admin/login.html.twig', array('name' => 'Fabien'));
           exit();
      
        }
    }
    public function index($mysqli, $twig) {
       
      echo $twig->render('homepage/index.html.twig', array('name' => 'Fabien'));
    }

}
