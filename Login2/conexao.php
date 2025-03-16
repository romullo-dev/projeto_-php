<?php

$username = 'root';
$password = '';
$database = 'logi,';
$host = 'localhost';

$sql =  new mysqli ($host, $username, $password, $database);

if ($sql->connect_error) {  
    die('ERRO NA CONEXAO'. $sql->connect_error);
} else {
    echo'Deu bom';
}