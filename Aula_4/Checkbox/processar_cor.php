<?php 
//CORES

$cores = $_POST ["cor"];

//MOSTRAR  CORES SELECIONADAS

foreach ($cores as $cores_selecionada) {
    echo "<br> Cor : ".$cores_selecionada."";
}


?> 