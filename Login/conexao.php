<?php

$usurio = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli ($host, $usurio, $senha, $database);

if ($mysqli->error) {
    die ("Falha ao conectar ao banco de dados " . $$mysqli->error);
}
