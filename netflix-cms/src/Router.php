<?php
namespace SInfPaKamd\WESS20;



use phpDocumentor\Reflection\Types\This;
use SInfPaKamd\WESS20\controller\IController;
use SInfPaKamd\WESS20\controller\MovieController;
use SInfPaKamd\WESS20\controller\NotFound;
use SInfPaKamd\WESS20\controller\ViewerController;
use SInfPaKamd\WESS20\model\Route;
use function PHPUnit\Framework\stringEndsWith;


class Router
{
   public $uri;

    /**
     * Router constructor.
     * @param $uri
     */
    public function __construct($uri)
    {
        $this->uri = $uri;
    }


    public function run($uri)
    {


        // Get defaults
        //echo $uri;
        //echo "<br>";
        $uri_parts = explode('?', $uri);
        // Get path like /lng/controller/action/param1/param2/.../...
        $path = $uri_parts[0];
        //echo $path;
        //echo "<br>";

       // $path_parts = explode('/', $path);

        $querystring = $uri_parts[1];
        //echo $querystring;
        //echo "<br>";

        $qs_parts = explode('&', $querystring);
        //$ctrl = $qs_parts[0];
        //echo $ctrl;
        //echo "<br>";
        /*
        $first_kv_param = explode('=', $ctrl);
        echo "key:" . $first_kv_param[0];
        echo "<br>";
        echo "value:" . $first_kv_param[1];
        echo "<br>";
        */

        $action = $qs_parts[1];
        //echo  $action;
        //echo "<br>";

        $param = $qs_parts[2];
        //echo  $param;
        //echo "<br>";

        $route = new Route($qs_parts[0],$qs_parts[1],$qs_parts[2]);

        //for movie controller
        $ctrl = explode('=',$qs_parts[0]);
        if(strcmp($ctrl[1] , "movie") == 0){
            $controller = new MovieController();
            $controller->run($route);
        }
        elseif (strcmp($ctrl[1] , "viewer") == 0){
            $controller = new ViewerController();
            $controller->run($route);
        }
        elseif (strcmp($ctrl[1] , "login") == 0){
            header('Location: /netflix-cms/src/view/login.php');
        }
        elseif (strcmp($ctrl[1] , "welcome") == 0){
            header('Location: /netflix-cms/src/view/welcome.php');
        }
        else{
            header('Location: /netflix-cms/src/view/not-found.php');
        }

    }


}