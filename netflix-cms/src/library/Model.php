<?php
namespace PaulKamdem\WESS20\library;

class Model {

    public $db;

    public function __construct(){
        $this->db = App::$db;
    }

}