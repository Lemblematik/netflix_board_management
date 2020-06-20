<?php


class Router
{
    protected $uri;
    protected $controller;
    protected $action;
    protected $param;
    protected $route;

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }


    /**
     * Router constructor.
     * @param $uri
     */
    public function __construct($uri)
    {
        // Get defaults
        $this->action = Config::get('default_action');
        $this->controller = Config::get('default_controller');
        $this->param = Config::get('default_param');
        $this->route = Config::get('default_route');

        $uri_parts = explode('?', $uri);
        $query = explode('=',$uri_parts[1]);
        $querystring = $query[1];
        //print_r($querystring): controllers/action/param
        // e.g: movie/get/1

        $path_parts = explode('/',$querystring);
        if (count($path_parts)) {
            if (current($path_parts)){
                $this->controller = strtolower(current($path_parts));
                array_shift($path_parts);
            }
            // Get action
            if (current($path_parts)){
                $this->action = strtolower(current($path_parts));
                array_shift($path_parts);
            }
            if (current($path_parts)){
                $this->param = strtolower(current($path_parts));
                array_shift($path_parts);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param mixed $param
     */
    public function setParam($param)
    {
        $this->param = $param;
    }




}