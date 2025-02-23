<?php 
include_once("classOpera.php");

$operaDepositar = new Operacao();

if (isset($_POST['valor'])) {
    $operaDepositar->Depositar($_POST['valor']);
} else {
    echo "Por favor, forneça um valor.";
}
?>