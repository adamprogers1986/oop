<?php

require('../vendor/autoload.php');
use Src\Site\Parameters\Settings;
use Src\Site\Parameters\Routes;
use Src\Admin\Parameters\Routes as AdminRoutes;
use Src\Admin\Parameters\Routing;

$settings = new Settings();
$routes = new Routes();
$routing = new Routing();

$adminRoutes = new AdminRoutes();

$settings->setTwig("../src/Site/Twig");

$twig = $settings->getTwig();
$pdo = $settings->getPdo();
$mysqli = $settings->getMysqli();
$routes->setLinks($pdo, $mysqli, $twig);
echo $routes->getLinks();

$pdo = null;
$mysqli->close();




