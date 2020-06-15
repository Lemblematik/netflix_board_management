<?php
namespace SInfPaKamd\WESS20\model;

use SInfPaKamd\WESS20\lib\DB;
use SInfPaKamd\WESS20\lib\Viewer;

class ViewerModel implements IViewer
{

    public function getAllViewer()
    {
        // TODO: Implement getAllViewer() method.
        $data = new DB();
        $tmp = $data->query('SELECT * FROM viewer');
        $result = array();
        foreach ($tmp as $key => $value){
            $newViewer = new Viewer($value->id, $value->username,$value->password);
            array_push($result,$newViewer);
        }
        return $result;
    }

    public function createViewer($viewerRequest)
    {
        $viewerdb = new DB();
        echo "passt";
        $isSuccess = $viewerdb->postViewerData($viewerRequest->getUsername(), $viewerRequest->getPassword());
        return $isSuccess;
    }

    public function getByUserName($username)
    {
        $data = new DB();
        $value = $data->queryByAlias('SELECT * FROM viewer WHERE username=' . $username);
        return new Viewer($value->id, $value->username, $value->password);
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