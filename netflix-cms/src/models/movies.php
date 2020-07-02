<?php
namespace PaulKamdem\WESS20\models;
use PaulKamdem\WESS20\library\Model as Model;
use PaulKamdem\WESS20\library\App as App;
class Movies extends Model {
    public function getList(){
        $sql = 'SELECT * FROM movie';
        $data = App::$db->queryData($sql);
        return $data;
    }
    public function getById($id){
        $id = (int)$id;
        $sql = "select * from movie where movieId = '{$id}' limit 1";
        $result = App::$db->queryData($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function save($data, $id=null){
        if ( !isset($data['name']) || !isset($data['producerName']) || !isset($data['description']) || !isset($data['publishDate']) ){
            return false;
        }


        if ( !$id ){ // Add new record
            $to_inserted_Data = [
                'name' => $data['name'],
                'producerName' => $data['producerName'],
                'description' => $data['description'],
                'publishDate' => $data['publishDate']
            ];
            $sql = "
                insert into movie (name,producerName,description,publishDate)
                   values (:name, :producerName, :description, :publishDate)";

            return App::$db->updateAndSaveData($sql, $to_inserted_Data);

        } else { // Update existing record
            $to_updated_Data = [
                'movieId' => $id,
                'name' => $data['name'],
                'producerName' => $data['producerName'],
                'description' => $data['description'],
                'publishDate' => $data['publishDate']
            ];
            $sql = "
                update movie
                   set name=:name,
                       producerName=:producerName,
                       description=:description,
                       publishDate=:publishDate
                   where movieId=:movieId
            ";
            return App::$db->updateAndSaveData($sql, $to_updated_Data);
        }
    }

    public function delete($movieId){
        $id = [(int)$movieId];
        $sql = "delete from movie where movieId = ?";
        return  App::$db->updateAndSaveData($sql,$id);
    }
}