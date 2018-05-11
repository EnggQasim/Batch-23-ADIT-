<?php

$names=array("junaid","Faizan","Meer Sadiq","Basit","Basil","Asad","Asim");

for($x=0; $x< count($names); $x++){
echo $names[$x]."<br>";
}


foreach ($names as $name) {
    echo "$name <br>";
}
?>