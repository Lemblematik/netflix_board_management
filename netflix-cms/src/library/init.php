<?php


spl_autoload_register(function ($class_name){
    $lib_path = ROOT.DS.'netflix-cms'.DS.'src'.DS.'library'.DS.strtolower($class_name).'.class.php';
    $controllers_path = ROOT.DS.'netflix-cms'.DS.'src'.DS.'controllers'.DS.str_replace('controller', '', strtolower($class_name)).'.controller.php';
    $model_path = ROOT.DS.'netflix-cms'.DS.'src'.DS.'models'.DS.strtolower($class_name).'.php';

    if ( file_exists($lib_path) ){
        require_once($lib_path);
    } elseif ( file_exists($controllers_path) ){
        require_once($controllers_path);
    } elseif ( file_exists($model_path) ){
        require_once($model_path);
    } else {
        throw new Exception('Failed to include class: '.$class_name);
    }
});
