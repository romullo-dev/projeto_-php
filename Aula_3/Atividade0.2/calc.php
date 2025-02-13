<?php 

echo "Usuario " . $_GET['usuario'] ."<br>";
echo "senha " . $_GET['senha'] ."<br>";

$sexo = $_GET['sexo'];

echo "Sexo selecionado: " . htmlspecialchars($sexo);





?>