<?php


namespace PaulKamdem\WESS20\library;


class App
{
    public static $router;
    public static $db;

    /**
     * @return mixed
     */
    public static function getRouter(){
        return self::$router;
    }

    public static function run($url)
    {
        self::$router = new Router($url);

        $dsn = 'mysql:host=' . Config::get('db.host') . ';dbname=' . Config::get('db.db_name');
        self::$db = new DB($dsn, Config::get('db.user'), Config::get('db.password'));


        $controller_class = ucfirst(self::$router->getController()).'Controller';
        $controller_method = strtolower(self::$router->getAction());

        $layout = self::$router->getRoute();
        if ( $layout == 'admin' && Session::get('role') != 'admin' ){
            if ( $controller_method != 'login' ){
                Router::redirect('/netflix-cms/index.php?x=employee/login');
            }
        }

        // Calling controller's method
        $controller_object = new $controller_class();
        if ( method_exists($controller_object, $controller_method) ){
            // Controller's action may return a view path
            $view_path = $controller_object->$controller_method();
            //get view
            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();
        } else {
            throw new \Exception('Method '.$controller_method.' of class '.$controller_class.' does not exist.');
        }


        $layout = self::$router->getRoute();
        $layout_path = VIEWS_PATH.DS.$layout.'.html';
        $layout_view_object = new View(compact('content'),$layout_path);
        echo $layout_view_object->render();
    }



}