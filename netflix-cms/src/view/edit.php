<!DOCTYPE HTML>
<html>
<body>
<h1>Edit movie</h1>
<?php

use SInfPaKamd\WESS20\lib\Movie;
use SInfPaKamd\WESS20\model\MovieModel;

if (!empty($_POST['name']) && !empty($_POST['producer']) && !empty($_POST['description']) && !empty($_POST['publishDate'])){
   echo "passt1";
    $movieToUpdate = new Movie($movie->getMovieId(),$_POST['name'],$_POST['description'],$_POST['producer'],$_POST['publishDate']);
    //update an backend
    echo "passt2";
    $movieModel = new MovieModel();
    echo "passt3";
    $isSuccess = $movieModel->updateMovie($movieToUpdate);
    echo "passt4";
    if($isSuccess){
        header('Location: /netflix-cms/index.php?x=movie&y=add&z=success');
    }else{
        header('Location: /netflix-cms/index.php?x=movie&y=add&z=nosuccess');
    }

}

?>
<form method="post">
    Name of movie: <input type="text" name="name" value="<?php echo $movie->getName();?>"><br>
    Name of producer: <input type="text" name="producer" value="<?php echo $movie->getProducerName();?>"><br>
    Description of movie: <textarea  rows="5" cols="40" type="text" name="description">
        <?php echo $movie->getDescription();?>
        </textarea>
    <br>
    Publishing Date:  <input type="date" size="60" name="publishDate" value="<?php echo $movie->getPublishDate();?>"/> <br>
    <input type="submit" value="Update Movie Infos">

</form>

</body>
</html>