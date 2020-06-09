<!DOCTYPE HTML>
<html>
<body>

<?php
if(array_key_exists('movies', $_POST)) {
    header('Location: /netflix-cms/index.php?x=movie&y=get&z=');

}
else if(array_key_exists('viewers', $_POST)) {
    header('Location: /netflix-cms/index.php?x=viewer&y=get&z=');

}
/*
function button1() {
    echo "This is Button1 that is selected";
}
*/
?>

<form method="post">
<input  formaction="" type="submit"
       class="button" name="viewers"
       value="see all viewers"> <br>
<input formaction="" type="submit"
       class="button" name="movies"
       value="see all movies"> <br>
<input formaction="" type="submit"
       class="button" name="logout"
       value="logout">
</form>

</body>
</html>