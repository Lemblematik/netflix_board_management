<!DOCTYPE HTML>
<html>
<body>
<?php
//check all les input if it is filled
//if ok, -> call controller add with success

if (!empty($_POST['name']) && !empty($_POST['producer']) && !empty($_POST['description']) && !empty($_POST['publishDate'])){

    //recuperer name, producer, description et la date tous inserer
    //$movie_added = new MovieRequest($_POST["name"],$_POST["description"],$_POST["producer"],$_POST["publishDate"]);

    //lenregistrer au serveur
    //si positif-> redirect  successfull.php site
    //else not succesful
    //$_POST["name"]) && !empty($_POST["producer"]) && !empty($_POST["description"]) && !empty($_POST["publishDate"])
    $movieRequest = new \SInfPaKamd\WESS20\lib\MovieRequest($_POST['name'],$_POST['description'],$_POST['producer'],$_POST['publishDate']);
    $movieModell = new \SInfPaKamd\WESS20\model\MovieModel();
    $isSuccess = $movieModell->addMovie($movieRequest);
    if($isSuccess){
        header('Location: /netflix-cms/index.php?x=movie&y=add&z=success');
    }
}

?>
<h1>Add new movie</h1>
<form method="post">
    Name of movie: <input type="text" name="name"><br>
    Name of producer: <input type="text" name="producer"><br>
    Description of movie: <textarea  rows="5" cols="40" type="text" name="description">
        </textarea>
    <br>
    Publishing Date:  <input type="date" size="60" name="publishDate"/> <br>
    <input type="submit" value="Add new movie">
</form>


</body>
</html>