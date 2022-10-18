<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$routes = include('./routes.php');

foreach($routes as $routePath => $routeView) {
	if ($routePath == $path) {
		include("./views/$routeView.php");
		exit();
	}

	include("./views/404.php");
	exit();
}