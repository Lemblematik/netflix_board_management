<?php
namespace PaulKamdem\WESS20\library;
use PDO;
use PDOException;

class DB
{

    protected $connection;
    /**
     * DB constructor.
     */
    public function __construct($dsn,$user,$password)
    {
        try {
            $this->connection = new PDO($dsn,$user,$password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            Session::setFlash("Connection successful");
        }catch (PDOException $exception){

            Session::setFlash("failed connection: " . $exception->getMessage());
        }
    }

    public function queryData($sql){
        $data = $this->connection->query($sql)->fetchAll();
        return $data;
    }

    public function updateAndSaveData($sql, $data){
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute($data);
    }


}