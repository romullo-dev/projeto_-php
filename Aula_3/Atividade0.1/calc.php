<?php 
echo"Nome do cliente ".$nome_pessoa = $_POST["nome"] . "<br>";

$cachorro = $_POST["cachorro"];
$salada = $_POST["salada"];
$burg = $_POST["burg"];
$batata = $_POST["batata"];
$x = $_POST["x"];
$refri = $_POST["refri"];


$Q_cachorro = $cachorro * 1.50;
$Q_salada = $salada * 3;
$Q_burg = $burg * 2;
$Q_batata = $batata * 2.50;
$Q_x = $x * 4.50;
$Q_refri = $refri * 2;

$soma = $Q_cachorro + $Q_salada + $Q_burg + $Q_batata + $Q_x + $Q_refri;

echo "Consumo do cliente " .$soma . "<br><br>";
echo 'Cachorro-Quente '.$cachorro."<br>";
echo 'X-Salada ' .$salada."<br>";
echo 'X-Burger '.$burg."<br>";
echo 'Batata Frita '.$batata."<br>";
echo 'X-Tudo '.$x."<br>";
echo 'Refrigerante Lata ' .$refri."<br>";





?>