<?php
namespace PaulKamdem\WESS20\controllers;

use PaulKamdem\WESS20\library\Controller as Controller;
use PaulKamdem\WESS20\models\Movies as Movies;
use PaulKamdem\WESS20\library\Router as Router;
use PaulKamdem\WESS20\library\Session as Session;


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

    public function add(){
        if ( $_POST ){
            $result = $this->model->save($_POST);
            if ( $result ){
                Session::setFlash('Page was saved.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/netflix-cms/index.php?x=movie/view');
        }
    }

    public function edit() {
        //if save values
        if ( $_POST ){
            $id = isset($_POST['movieId']) ? $this->e($_POST['movieId']) : null;
            $result = $this->model->save($_POST, $id);
            if ( $result ){
                Session::setFlash('Page was saved.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/netflix-cms/index.php?x=movie/view');
        }

        //if call edit view
        if ( isset($this->param) ){
            $this->data['movies'] = $this->model->getById($this->param);
        } else {
            Session::setFlash('Wrong page id.');
            Router::redirect('/netflix-cms/index.php?x=movie/view');
        }
    }
    public function delete(){
        if ( isset($this->param) ){
            $result = $this->model->delete($this->param);
            if ( $result ){
                Session::setFlash('Page was deleted.');
            } else {
                Session::setFlash('Error.');
            }
        }
        Router::redirect('/netflix-cms/index.php?x=movie/view');
    }

    public function see(){
        if ( isset($this->param) ){
            $this->data['movies'] = $this->model->getById($this->param);
        } else {
            Session::setFlash('Wrong page id.');
            Router::redirect('/netflix-cms/index.php?x=movie/view');
        }
    }

    public function e($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }





}
