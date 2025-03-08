<?php

include_once("consultaClass.php");

$objdados = new consultaClass();

$objdados->cunsutarCPF($_POST['cpf_cliente']);
$objdados->cunsutarCNPJ($_POST['cnjp_cliente']);

