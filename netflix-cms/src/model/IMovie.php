<?php
namespace SInfPaKamd\WESS20\model;

interface IMovie
{
    //getAllMovies() from db
    public function getAllMovies();
    //getMovie(movie-id) from db
    public function getMovie($movieId);
    //addMovie(movie) in db
    public function addMovie($movie);
    //deleteMovie(movie) in db
    public function deleteMovie($movieId);
}