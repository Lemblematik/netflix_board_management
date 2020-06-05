<?php
echo "movielist";
echo "<br>";
foreach ($result as $key => $value){
    echo "\$result[$key]";
    echo "<br>";
    echo $value->getProducerName() . "<br>";
    echo $value->getName() . "<br>";
    echo $value->getDescription() . "<br>";
    echo "<br>";
}