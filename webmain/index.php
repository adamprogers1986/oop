<?php

require('../vendor/autoload.php');
use Src\Site\Parameters\Settings;
use Src\Site\Parameters\Routes;

$settings = new Settings();
$routes = new Routes();

$settings->setTwig("../src/Site/Twig");

$twig = $settings->getTwig();
$pdo = $settings->getPdo();
$mysqli = $settings->getMysqli();
echo $routes->getLinks($pdo, $mysqli, $twig);
$pdo = null;
$mysqli->close();




