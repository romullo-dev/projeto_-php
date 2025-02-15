<?php

//CRIAR UMA ARRAY
$frutas = array("Goiaba","Banana","Abacate","Laranja");

//APAGAR ARRAY
unset($frutas["1"]);

//VAR DUMP
var_dump($frutas);

//DIE
die("Aqui acaba...");

//FORMA TRADICIONAL
echo"COM FOR <BR>";
for ($i = 0; $i < count($frutas); $i++) {     
    echo "<BR>" . $frutas[$i];
}

echo"<BR>";

echo"<BR>COM FORECH <BR>";
//FORMA MAIS PROFICIONAL E MAIS ELEGANTE
foreach ($frutas as $key => $value) {
    echo "". $value ."<BR>";
}



?>