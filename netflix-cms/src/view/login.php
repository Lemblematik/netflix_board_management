<!DOCTYPE HTML>
<html>
<body>
<?php
//check if post[username], and post[password] not empty
//sonst define new viewer with post[username], and post[password]
//check in db if exist
//then enable access with token to welcome.php
//sonst not member register


//if post[registrate] open
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