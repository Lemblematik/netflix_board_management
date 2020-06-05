<?php
namespace SInfPaKamd\WESS20\controller;

use SInfPaKamd\WESS20\model\ViewerModel;

class ViewerController
{
    public $viewerModell;

    /**
     * ViewerController constructor.
     * @param $viewers
     */
    public function __construct()
    {
        $this->viewerModell = new ViewerModel();
    }

    public function run($route)
    {


        $action = explode('=',$route->getAction());
        $param = explode('=',$route->getParam());



        //if url is movie/get
        //then call getAllMovies from MovieModell
        //include 'view/movielist.php
        if((strcmp($action[1] , "get") == 0)&& empty($param[1])){
            $viewers = $this->viewerModell->getAllViewer();
            //include view
            include dirname(dirname(__DIR__)) . '/src/view/viewerlist.php';
            //header('Location: /netflix-cms/src/view/viewerlist.php');
        }
        elseif((strcmp($action[1] , "add") == 0)&& empty($param[1])){
            header('Location: /netflix-cms/src/view/add-viewer.php');
        }
        elseif((strcmp($action[1] , "add") == 0)&& (strcmp($param[1] , "success") == 0)){

            header('Location: /netflix-cms/src/view/add-success.php');
        }else {
            header('Location: /netflix-cms/src/view/not-found.php');
        }
    }
}