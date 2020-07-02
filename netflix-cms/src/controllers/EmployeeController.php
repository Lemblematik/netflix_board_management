<?php
namespace PaulKamdem\WESS20\controllers;
use PaulKamdem\WESS20\library\Controller as Controller;
use PaulKamdem\WESS20\models\Employee as Employee;
use PaulKamdem\WESS20\library\Router as Router;
use PaulKamdem\WESS20\library\Session as Session;

class EmployeeController extends Controller
{
    function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Employee();

    }
    public function login(){

        if ( $_POST && isset($_POST['username']) && isset($_POST['password']) ){

            $user = $this->model->getByUsername($_POST['username']);
            $hash = md5($_POST['password']);
            if ( $user && $hash == $user['password'] ){
                Session::set('username', $user['username']);
                Session::set('role', $user['role']);
            }
            Router::redirect('/netflix-cms/index.php?x=movie/view');
        }
    }

    public function logout(){
        Session::destroy();
        Router::redirect('/netflix-cms/index.php?x=employee/login');
    }

    public function e($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }


}