<?php
namespace SInfPaKamd\WESS20\model;

use SInfPaKamd\WESS20\lib\Viewer;

class ViewerModel implements IViewer
{

    public function getAllViewer()
    {
        // TODO: Implement getAllViewer() method.
        return array(
            "viewer1" => new Viewer("user1","123","token1"),
            "viewer2" => new Viewer("user2","123","token2")
        );
    }

    public function createViewer($viewer)
    {
        // TODO: Implement createViewer() method.
    }
}