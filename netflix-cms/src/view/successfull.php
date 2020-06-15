<!DOCTYPE HTML>
<html>
<body>
<?php
echo "successfull";
if(array_key_exists("welcome", $_POST)) {
    header('Location: /netflix-cms/index.php?x=welcome');
}
?>
<form method="post">
    <input type="submit" name="welcome" value="go home">
</form>

</body>
</html>

