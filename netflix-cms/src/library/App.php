<?php


namespace PaulKamdem\WESS20\library;


class App
{
    public  static $router;
    public  $db;

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
        $db = new DB($dsn, Config::get('db.user'), Config::get('db.password'));



        $controller_method = strtolower(self::$router->getAction());

        $layout = self::$router->getRoute();
        if ( $layout == 'admin' && Session::get('role') != 'admin' ){
            if ( $controller_method != 'login' ){
                Router::redirect('/netflix-cms/index.php?x=employee/login');
            }
        }


        $layout = self::$router->getRoute();
        $layout_path = VIEWS_PATH.DS.$layout.'.html';
        $layout_view_object = new View(compact('content'),$layout_path);
        echo $layout_view_object->render();
    }



}