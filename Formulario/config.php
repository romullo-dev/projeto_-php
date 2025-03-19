<?php

$host =  "localhost";
$username  = "root";
$password = '';
$database  = "formulario";

$conexao =  new mysqli($host, $username , $password, $database );

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);  
}




?> 
