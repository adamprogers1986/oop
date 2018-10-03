<?php

use Src\Admin\Parameters\AdminSettings;
use Src\Admin\Parameters\AdminRoutes;
use Src\Admin\Parameters\Routing;
use Src\Site\Routing\Routes;


$settings = new AdminSettings();
$adminRoutes = new AdminRoutes();
$routes = new Routes();

$settings->setTemplating("twig", "../src/Site/Twig", "");
$twig = $settings->getTemplating();

$settings->setDatabase("PDO", "localhost", "test", "morty", "Adrog_2016");

$pdo = $settings->getDatabase();

$routes->setRoutes();
$routes->renderPage($pdo, $twig);

$pdo = null;
$mysqli=null;
