<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'movie-cms'.DS.'src'.DS.'views');


use PaulKamdem\WESS20\library\App as App;
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '\src\config\Config.php';

$url = $_SERVER['REQUEST_URI'];
error_reporting(E_ALL);
ini_set("display_errors","On");
session_start();

try {
    App::run($url);
} catch (Exception $e) {
}

;