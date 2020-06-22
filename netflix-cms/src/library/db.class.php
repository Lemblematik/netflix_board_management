<?php

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
            echo "successful";
        }catch (PDOException $exception){
            echo "failed connection " . $exception->getMessage();
        }
    }

    public function queryData($sql){
        $data = $this->connection->query($sql)->fetchAll();
        return $data;
    }



}