<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

require dirname(__DIR__) . '\netflix-cms\vendor\autoload.php';
use SInfPaKamd\WESS20\Router as Router;



use SInfPaKamd\WESS20\controller\MovieController as MovieController;
use SInfPaKamd\WESS20\controller\ViewerController as ViewerController;



/*
$route = new Router();
//initialise and define Router to controller
$route->add("/movies", MovieController::class);
$route->add("/viewers", ViewerController::class);

$controller = $route->routeAll();
$controller->run();

//initialise and define Router to viewer Controller

//initialise default route for login

// then run not-found.php
*/
$url = $_SERVER['REQUEST_URI'];

$route = new Router($url);
$route->run($url);





