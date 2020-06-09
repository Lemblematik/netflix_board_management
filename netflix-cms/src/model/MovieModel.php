<?php
namespace SInfPaKamd\WESS20\model;

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
        //$data->query('SELECT * FROM movie');
        //echo $data;
        return array(
            "Movie1" => new Movie("1","film1","really nice", "Denzel washington","Today"),
            "Movie2" => new Movie("2","film2","really nice", "Denzel washington","Today"),
        );

    }

    public function getMovie($movieId)
    {
        //same : "select * from movie where id = '{$movieId}' limit 1";
       // return same
        return  new Movie("1","film1","really nice", "Denzel washington","Today");
    }

    public function addMovie($movie)
    {
        //same
        // TODO: Implement addMovie() method.
    }

    public function deleteMovie($movieId)
    {
        //delete "delete from movie where id = '{$movieId}'

    }
}