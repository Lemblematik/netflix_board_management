<?php
echo "viewerlist <br>";
foreach ($viewers as $key => $value){
    echo "\$viewers[$key]";
    echo "<br>";
    echo $value->getUsername() . "<br>";
    echo $value->getPassword() . "<br>";
    echo $value->getToken() . "<br>";
    echo "<br>";
}
