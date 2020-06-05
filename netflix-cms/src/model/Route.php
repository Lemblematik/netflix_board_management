<?php


namespace SInfPaKamd\WESS20\model;


class Route
{
    protected $ctlr;
    protected $action;
    protected $param;

    /**
     * Router constructor.
     * @param $ctlr
     * @param $action
     * @param $param
     */
    public function __construct($ctlr, $action, $param)
    {
        $this->ctlr = $ctlr;
        $this->action = $action;
        $this->param = $param;
    }

    /**
     * @return mixed
     */
    public function getCtlr()
    {
        return $this->ctlr;
    }

    /**
     * @param mixed $ctlr
     */
    public function setCtlr($ctlr)
    {
        $this->ctlr = $ctlr;
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