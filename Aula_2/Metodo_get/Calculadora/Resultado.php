<?php

//VALOR DE N
$num_1 = $_GET["num_1"];

//VAOLOR DE N2
$num_2 = $_GET["num_2"];

//CALCULAR
$soma = $num_1 + $num_2;
$divisao = $num_1 / $num_2;
$mult = $num_1 * $num_2;
$subt = $num_1 - $num_2;

echo("Soma : " .$soma);
echo("<br>Multiplicação : ".$mult);
echo("<br>Subtração : ".$subt);
echo("<br>Divisão : ". $divisao);
?>