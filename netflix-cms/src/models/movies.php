<?php
class Movies extends Model {
    public function getList(){
        $sql = 'SELECT * FROM movie';
        $data = App::$db->queryData($sql);
        return $data;
    }
}