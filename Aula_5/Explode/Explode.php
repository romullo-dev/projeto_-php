<?php

var_dump(  $cpf = "012.452.156-90");

$novo_cpf = explode(".", $cpf);

$novo_cpf = $novo_cpf[0].$novo_cpf [1]. $novo_cpf [2];

$novo_cpf = explode("-", $novo_cpf);

$novo_cpf = $novo_cpf[0].$novo_cpf[1];


echo"<BR>";

var_dump($novo_cpf);


?>