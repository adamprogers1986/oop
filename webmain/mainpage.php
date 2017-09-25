<?php

require('../vendor/autoload.php');

use Src\Parameters\Db;
use Src\Routes\Routing;

$routes = new Routing();
$gd = new Db();

$pdo = $gd->getPdo();
$mysqli = $gd->getMysqli();
echo $routes->getLinks($pdo, $mysqli);
$pdo = null;
$mysqli->close();



