<?php

//NOME 
$nome = $_POST ["nome"];
//IDADE 
$idade = $_POST ["idade"];

if ($idade >= "18") {
    print "{$nome}, voce é maior de idade, ";
} else {
    print "{$nome},voce é menos de idade, ";
}

//TESTAR IDADE
if ($idade >= 18 and $idade <= 12) { 
    echo"E apenas uma criança";
} elseif ($idade > 12 and $idade <= 17) {  
    echo "Adolescente";
}elseif ($idade > 17 and $idade <= 30) {  
    echo "Jovem";
}   else{
    echo "Vixxx";
}
?>