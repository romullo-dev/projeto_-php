<?php
include_once("CachorroClass.php");
include_once("GatoClass.php");

$objCachorro = new CachorroClass('Baby');
print"<br> {$objCachorro->getNome()} O cachorro " .$objCachorro->fazerSom();
$objCachorro -> infomarIdade(3);
print "".$objCachorro->mostrarIdade();

$objCachorro->dascreverAnimal();

$objGato = new GatoClass('Felix');
print("<br> {$objGato->getNome()} O gato " .$objGato->fazerSom());
$objGato -> mostrarPeso(3);
print "".$objGato->mostrarPeso();

$objGato -> dascreverAnimal();








