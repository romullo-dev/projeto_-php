<?php
$bol_volei = $_POST ["Bol_volei"];
$bol_fut = $_POST ["Bol_fut"];
$bol_basque = $_POST ["Bol_basque"];

$soma_bol_volei = $bol_volei * 25;
$soma_bol_fut = $bol_fut * 10;
$soma_bol_basque = $bol_basque * 20;

$soma =  $soma_bol_volei + $soma_bol_fut + $soma_bol_basque;

echo "quantidade de Bolas de Volei ". $bol_volei . " Valor R$ " . $soma_bol_volei . "<br>";
echo "quantidade de Bolas de futebol ". $bol_fut . " Valor R$ " . $soma_bol_fut. "<br>";
echo "quantidade de Bolas de basquete ". $bol_volei . " Valor R$ " . $soma_bol_volei. "<br>";
echo "Soma : ". $soma;
?> 

