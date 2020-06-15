<?php
namespace SInfPaKamd\WESS20\model;

interface IViewer
{
    //getAllViewer from db
    public function getAllViewer();
    public function createViewer($viewer);
    public function checkIfExist($viewer);
}