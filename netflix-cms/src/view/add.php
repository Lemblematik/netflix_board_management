<!DOCTYPE HTML>
<html>
<body>
<h1>Add new movie</h1>

<form action="successfull.php" method="post">
    Name of movie: <input type="text" name="name"><br>
    Name of producer: <input type="text" name="producer"><br>
    Description of movie: <textarea  rows="5" cols="40" type="text" name="description">
        </textarea>
    <br>
    Publishing Date:  <input type="date" size="60" name="publishingDate"/> <br>
    <input type="submit" value="Add new movie">
</form>


</body>
</html>