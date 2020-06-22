<?php


class Employee extends Controller
{
    public function getByUsername($username){

        $sql = "select * from employee where username = '{$username}' limit 1";
        $result = App::$db->queryData($sql);
        if ( isset($result[0]) ){
            return $result[0];
        }
        return false;
    }

}