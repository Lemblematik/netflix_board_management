<!DOCTYPE HTML>
<html>
<body>
<?php


if (!empty($_POST['username']) && !empty($_POST['password']) && (strcmp($_POST['password'],$_POST['new_password'] ) == 0)){
    echo "passt1";
    $viewer = new \SInfPaKamd\WESS20\lib\ViewerRequest($_POST['username'],$_POST['password']);
    echo "passt2";
    $viewerModel = new \SInfPaKamd\WESS20\model\ViewerModell();
    echo "passt3";
    $isSuccess = $viewerModel->checkIfExist($viewer);
    echo "passt4";
    if($isSuccess){
        header('Location: /netflix-cms/index.php?x=welcome');
    }else{
        header('Location: /netflix-cms/index.php?x=login');
    }
}
?>
<h1>Add new movie</h1>
<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    New Password: <input type="password" name="new_password"><br>
    <input type="submit" value="login">
</form>
</body>
</html>