<?php


namespace SInfPaKamd\WESS20\lib;



use \PDO;
use phpDocumentor\Reflection\Types\Boolean;

class DB
{
    protected $connection;

    public function __construct(){
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=netflix_cms','root','Moimeme?123');
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (\PDOException $exception){
            echo "failed connection " . $exception->getMessage();
        }
    }

    public function query($string)
    {
        $data = $this->connection->query($string);
        return $data->fetchAll();
    }

    public function queryByAlias($string)
    {
        $data = $this->connection->query($string);
        return $data->fetch();
    }

    public function postMovieData($name, $description, $producerName, $publishDate){
        try {
            $stmt = $this->connection->prepare("INSERT INTO movie(name,description,producerName,publishDate) 
        VALUES (:name, :description, :producerName, :publishDate)");
            //uniqid()
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':producerName', $producerName);
            $stmt->bindParam(':publishDate', $publishDate);
            $stmt->execute();
        }catch (\PDOException $exception){
            return false;
        }
        return true;
    }

    public function postViewerData($username, $password){
        try {
            $stmt = $this->connection->prepare("INSERT INTO movie(username,password) 
        VALUES (:username, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            echo "gut";
        }catch (\PDOException $exception){
            return false;
        }
        return true;
    }

    public function updateMovieData(Movie $movieToUpdate)
    {
        try {
            $stmt = $this->connection->prepare("UPDATE movie SET
            name=?,
            description=?,
            producerName=?,
            publishDate=?
            WHERE movieId=?");
            $stmt->execute([$movieToUpdate->getName(), $movieToUpdate->getDescription(), $movieToUpdate->getProducerName(),$movieToUpdate->getPublishDate(), $movieToUpdate->getMovieId()]);
        }catch (\PDOException $exception){
            return false;
        }
        return true;
    }

    public function deleteMovie($movieId)
    {
        try {
            $stmt = $this->connection->prepare("DELETE FROM movie 
            WHERE movieId=?");
            $stmt->execute([$movieId]);
        }catch (\PDOException $exception){
            return false;
        }
        return true;
    }

    public function getMovieData($movieId)
    {
        try {
            $stmt = $this->connection->query("SELECT * FROM movie WHERE movieId=" . $movieId .";");
            return $stmt->fetch();
        }catch (\PDOException $exception){
            echo "failed connection " . $exception->getMessage();
        }
    }

}