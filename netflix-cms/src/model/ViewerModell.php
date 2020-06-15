<?php


namespace SInfPaKamd\WESS20\model;


use SInfPaKamd\WESS20\lib\DB;

class ViewerModell implements IViewer
{

    public function getAllViewer()
    {
        // TODO: Implement getAllViewer() method.
    }

    public function createViewer($viewer)
    {
        // TODO: Implement createViewer() method.
    }

    public function checkIfExist($viewer)
    {
        // TODO: Implement checkIfExist() method.
        $data = new DB();
        $value = $data->queryByAlias('SELECT * FROM viewer WHERE username=' . $viewer.getUsername() .
            'password=' . $viewer.getPassword() .';');
        $result = count($value);
        if ($result == 0){
            return false;
        }
        return true;
    }
}