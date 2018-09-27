<?php

use Src\Admin\Parameters\AdminSettings;
use Src\Admin\Parameters\AdminRoutes;
use Src\Admin\Parameters\Routing;
use Src\Site\Routing\Routes;


$settings = new AdminSettings();
$adminRoutes = new AdminRoutes();
$routes = new Routes();


$settings->setTemplating("twig", "../src/Site/Twig", "../Cache");
$twig = $settings->getTemplating();

$settings->setDatabase("PDO", "localhost", "test", "morty", "Adrog_2016");

$pdo = $settings->getDatabase();


// $pdo = $settings->getPdo();
// $mysqli = $settings->getMysqli();

//$arrayobj = new ArrayObject(new NewRoute());
//$arrayobj->offsetSet(1, 'five');
//$arrayobj->offsetSet('group', array('g1', 'g2'));





//$pdo = null;
//$mysqli->close();