<?php
namespace SInfPaKamd\WESS20\model;

use SInfPaKamd\WESS20\lib\Movie;

class MovieModel implements IMovie
{

    public function getAllMovies()
    {
        // TODO: Implement getAllMovies() method.
        //return array("A", "B", "C");

        return array(
            "Movie1" => new Movie("1","film1","really nice", "Denzel washington","Today"),
            "Movie2" => new Movie("2","film2","really nice", "Denzel washington","Today"),
        );

    }

    public function getMovie($movieId)
    {
        // TODO: Implement getMovie() method.
        return  new Movie("1","film1","really nice", "Denzel washington","Today");
    }

    public function addMovie($movie)
    {
        // TODO: Implement addMovie() method.
    }

    public function deleteMovie($movieId)
    {
        // TODO: Implement deleteMovie() method.
    }
}