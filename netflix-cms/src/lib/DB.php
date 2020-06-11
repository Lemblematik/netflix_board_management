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

    public function postData($name,$description,$producerName,$publishDate){
        /*
         'INSERT INTO movie(name,description,producerName,publishDate)
                VALUES
         */
        try {
            $stmt = $this->connection->prepare("INSERT INTO movie(name,description,producerName,publishDate) 
        VALUES (:name, :description, :producerName, :publishDate)");
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


}