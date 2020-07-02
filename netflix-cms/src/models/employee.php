<?php
namespace PaulKamdem\WESS20\models;
use PaulKamdem\WESS20\models\Model as Model;
use PaulKamdem\WESS20\library\App as App;

class Employee extends Model
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