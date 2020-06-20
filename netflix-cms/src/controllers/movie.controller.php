<?php
class MovieController extends Controller
{
    public function index(){
        $this->data['test'] =  "movie  controller works";
    }
    public function view(){
        $param = App::getRouter()->getParam();

        if ( isset($param) ){
            $alias = strtolower($param);
            $this->data['content'] = "hier is param: '{$alias}' ";
        }
    }
}
