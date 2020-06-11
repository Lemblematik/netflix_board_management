<?php
namespace SInfPaKamd\WESS20\controller;

use phpDocumentor\Reflection\Types\This;
use SInfPaKamd\WESS20\lib\MovieRequest;
use SInfPaKamd\WESS20\model\MovieModel;
use SInfPaKamd\WESS20\model\Route;
use  SInfPaKamd\WESS20\view\movie;
use  SInfPaKamd\WESS20\view\add;

class MovieController
{
    public $movieModel;


    //initialise all request for start view

    /**
     * MovieController constructor.
     * @param $movieModel
     */
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function run(Route $route)
    {


        $action = explode('=',$route->getAction());
        $param = explode('=',$route->getParam());




        //if url is movie/get
        //include 'view/movielist.php
        if((strcmp($action[1] , "get") == 0)&& empty($param[1])){
            //$movies = $this->movieModel->getAllMovies();
            //include view
            $result = $this->movieModel->getAllMovies();
            //$result = implode($movies);
            include dirname(dirname(__DIR__)) . '/src/view/movielist.php';
            //header('Location: /netflix-cms/src/view/movielist.php');
        }
        elseif((strcmp($action[1] , "get") == 0)&& !empty($param[1])){
            //getModellView($param[1])
            $movie = $this->movieModel->getMovie($param[1]);
            include (dirname(dirname(__DIR__)) . '/src/view/movie.php');
            //header('Location: /netflix-cms/src/view/movie.php');
        }
        elseif((strcmp($action[1] , "add") == 0)&& empty($param[1])){

            include (dirname(dirname(__DIR__)) . '/src/view/add.php');
        }
        elseif((strcmp($action[1] , "add") == 0)&& (strcmp($param[1] , "success") == 0)){

            include (dirname(dirname(__DIR__)) . '/src/view/successfull.php');
            //header('Location: /netflix-cms/src/view/successfull.php');
        }
        elseif((strcmp($action[1] , "edit") == 0)&& !empty($param[1])){
            $movie = $this->movieModel->getMovie($param[1]);
            include (dirname(dirname(__DIR__)) . '/src/view/edit.php');
        }
        elseif((strcmp($action[1] , "delete") == 0)&& !empty($param[1])){
            //header('Location: /netflix-cms/src/view/successfull.php');
            include (dirname(dirname(__DIR__)) . '/src/view/successfull.php');
        }
        else{
            include (dirname(dirname(__DIR__)) . '/src/view/not-found.php');
        }


/*
        //if url is  movie/get/movie-id
        //then call getMovie(movie-id) from MovieModell
        //include 'view/movie.php
        if(true()){
            $movieId = "test";
            global $movie;
            $movie = $this->movieModel->getMovie($movieId);
            include dirname(dirname(__DIR__)).'/src/view/movie.php';
        }


        //if url is movie/add
        //include 'view/add.php'
        if(true()){
            $movieId = "test";
            include "view/add.php";
        }


        //sonst
        //include 'view/not-found.php'
        include "view/not-found";
*/

    }

}