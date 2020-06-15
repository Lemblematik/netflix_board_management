<!DOCTYPE HTML>
<html>
<body>
<?php
use SInfPaKamd\WESS20\lib\ViewerRequest;
use SInfPaKamd\WESS20\model\ViewerModel;

//session_start();
//check if post[username], and post[password] not empty
if (!empty($_POST['username']) && !empty($_POST['password'])){
    echo $_POST['username'];
    echo $_POST['password'];
    /*
    $viewerModel = new ViewerModel();
    $viewerModel = new ViewerModel();
    $viewerRequest = new ViewerRequest($_POST['username'],$_POST['password']);
    $isExist = $viewerModel->checkIfExist($viewerRequest);
    if ($isExist){
        include (dirname(dirname(__DIR__)) . '/src/view/welcome.php');
    }else{
        echo "password or username is not correct";
    }
    */
}
?>

<form action="welcome.php" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="login">

</form>
<form action="registration.php" method="post">
    <input type="submit" value="registrate">
</form>

</body>
</html>