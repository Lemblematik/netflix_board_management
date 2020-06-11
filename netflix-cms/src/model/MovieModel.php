<?php
namespace SInfPaKamd\WESS20\model;

use PDO;
use SInfPaKamd\WESS20\lib\DB;
use SInfPaKamd\WESS20\lib\Movie;

class MovieModel implements IMovie
{




    public function getAllMovies()
    {
        //sql anfragen absetzen
        //$sql = "select * from movie";
        //return data from query($sql)
        // TODO: Implement getAllMovies() method.
        $data = new DB();
        $tmp = $data->query('SELECT * FROM movie');
        //(echo count($tmp);
        $result = array();
        foreach ($tmp as $key => $value){
            //echo $value->name;
            $newMovie = new Movie($value->movieId,$value->name,$value->description,$value->producerName, $value->publishDate);
            array_push($result,$newMovie);
        }
       return $result;
    }

    public function getMovie($movieId)
    {
        //same : "select * from movie where id = '{$movieId}' limit 1";
        // return same
        $data = new DB();
        $value = $data->queryByAlias('SELECT * FROM movie WHERE movieId=' . $movieId);
        echo $value->name;
        return new Movie($value->movieId, $value->name, $value->description, $value->producerName, $value->publishDate);
    }
        public function addMovie($movieRequest)
    {
        //same
        // TODO: Implement addMovie() method.
        $data = new DB();
        $isSuccess = $data->postData($movieRequest->getName(),$movieRequest->getDescription(),$movieRequest->getProducerName(),$movieRequest->getPublishDate());
        return $isSuccess;
    }
    public function deleteMovie($movieId)
    {
        //delete "delete from movie where id = '{$movieId}'

    }
}