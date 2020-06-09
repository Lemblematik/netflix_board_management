<!DOCTYPE HTML>
<html>
<body>
<?php

//check if post[username], and post[password] not empty
//and  check if check if post[username], and post[password] same
//sonst define new viewer with post[username], and post[password]

//then enable access with token to welcome.php
//

?>

<form action="welcome.php" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    New Password: <input type="password" name="new-password"><br>
    <input type="submit" value="login">
</form>
</body>
</html>