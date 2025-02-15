<?php

$num = $_POST ["num"];

//TABUADA
for ($i = 1; $i < 10; $i ++) {
    echo"<br>". $num ." X ". $i ." = " . ($num *$i)  ;
}


?>