<?php
//CRIAR UM ARRAY
$frutas = array("Goiaba","Banana","Abacate","Laranja");
//ACESSAR UMA POSICAO
print $frutas[1];

print("<br>");

//ALTERAR UMA POSICAO
print $frutas[0] = "Manga";
print("<br>");

//ADIOCINAR UM NOVO ELEMENTO
array_push($frutas,"Mamão");
print $frutas[4];
print("<br>");

//REMOVER UM ELEMENTO
$frutas = array_diff($frutas, [3]);

//var_dump($frutas);

//VERIFICA SE TEM UM ELEMENTO
print in_array("Abacate", $frutas);

?>