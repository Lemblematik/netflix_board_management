<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'netflix-cms'.DS.'src'.DS.'views');


error_reporting(E_ALL);
ini_set("display_errors","On");
require_once(ROOT.DS.'netflix-cms'.DS.'src'.DS.'library'.DS.'init.php');
require dirname(__DIR__) . '\netflix-cms\vendor\autoload.php';
require dirname(__DIR__) . '\netflix-cms\src\config\config.php';


$url = $_SERVER['REQUEST_URI'];
App::run($url);







