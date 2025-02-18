<?php

include_once("funcao.php");

$n1 = $_POST ["num_1"]; $n2 = $_POST ["num_2"];

$op = $_POST ["operacao"];

//CALCULO

if ($op == "Adicão") 
{
    $resultado = somar($n1, $n2);
    echo $resultado;
} elseif ($op == "Subtracao") 
{
    $resultado = subtrair($n1, $n2);
    echo $resultado;
} elseif ($op == "Multiplicacao") 
{
    $resultado = mult($n1, $n2);
    echo $resultado;
} elseif  ($op == "Divisao") 
{
    $resultado = divisao($n1, $n2);
    echo $resultado;
} else {
    echo"Incorreto";
}


