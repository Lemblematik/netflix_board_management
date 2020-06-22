<?php
// need model, data
class Controller
{
    protected $data;

    protected $model;

    protected $param;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param mixed $params
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    public function __construct($data = array()){
        $this->data = $data;
        $this->param = App::getRouter()->getParam();
        echo $this->param;
    }

}