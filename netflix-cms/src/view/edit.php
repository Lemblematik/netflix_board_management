<!DOCTYPE HTML>
<html>
<body>
<h1>Edit movie</h1>
<?php


?>
<form action="successfull.php" method="post">
    Name of movie: <input type="text" name="name" value="<?php echo $movie->getName();?>"><br>
    Name of producer: <input type="text" name="producer" value="<?php echo $movie->getProducerName();?>"><br>
    Description of movie: <textarea  rows="5" cols="40" type="text" name="description">
        <?php echo $movie->getDescription();?>
        </textarea>
    <br>
    Publishing Date:  <input type="date" size="60" name="publishingDate"/> <br>
    <input type="submit" value="Update Movie Infos">

</form>

</body>
</html>