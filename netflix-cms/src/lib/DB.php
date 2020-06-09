<?php


namespace SInfPaKamd\WESS20\lib;



use PDO;

class DB
{
    protected $connection;

    public function __construct(){
      $host = 'localhost';
      $user = 'root';
      $password = 'Moimeme?123';
      $dbname = 'netflix_cms';
      $dsn = 'mysql:host=localhost;dbname=netflix_cms';

        try {
            echo "passt";
            $this->connection = new \PDO($dsn,$user,$password);

            $this->connection->setAttribute(\PDO::ERRMODE_WARNING, \PDO::ATTR_DEFAULT_FETCH_MODE);
            echo "successful";
        }catch (\PDOException $exception){
            echo "failed connection " . $exception->getMessage();
        }


    }
/*
    public function query($sql) {
        $stmt = $this->connection->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $row['name'] . '<br>';
        }
    }

*/
    //connection
    //run sql anfrage
    //escape something

}