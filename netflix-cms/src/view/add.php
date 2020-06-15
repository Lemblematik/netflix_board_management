<!DOCTYPE HTML>
<html>
<body>
<?php
//check all les input if it is filled
//if ok, -> call controller add with success
use SInfPaKamd\WESS20\lib\MovieRequest;
use SInfPaKamd\WESS20\model\MovieModel;

if (!empty($_POST['name']) && !empty($_POST['producer']) && !empty($_POST['description']) && !empty($_POST['publishDate'])){
    $movieRequest = new MovieRequest($_POST['name'],$_POST['description'],$_POST['producer'],$_POST['publishDate']);
    $movieModell = new MovieModel();
    $isSuccess = $movieModell->addMovie($movieRequest);
    if($isSuccess){
        header('Location: /netflix-cms/index.php?x=movie&y=add&z=success');
    }else{
        header('Location: /netflix-cms/index.php?x=movie&y=add&z=nosuccess');
    }
}
?>
<h1>Add new movie</h1>
<form method="post">
    Name of movie: <input type="text" name="name"> <br>
    Name of producer: <input type="text" name="producer"><br>
    Description of movie:
    <textarea  rows="5" cols="40" type="text" name="description">
    </textarea><br>
    Publishing Date:  <input type="date" size="60" name="publishDate"> <br>
    <input type="submit" value="Add new movie">
</form>
</body>
</html>