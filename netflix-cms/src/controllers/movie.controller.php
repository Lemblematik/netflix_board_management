<?php
class MovieController extends Controller
{

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Movies();
    }

    public function index(){
        $this->data['movies'] =  $this->model->getList();
    }
    public function view(){
        $this->data['movies'] =  $this->model->getList();
        /*
        $param = App::getRouter()->getParam();
        if ( isset($param) ){
            $alias = strtolower($param);
            $this->data['content'] = "hier is param: '{$alias}' ";
        }
        */
    }
}
