<?php

//INCLUIR FUNCAO.PHP
include_once("funcoes.php");

//LOGIN
$login = $_POST["login"];
//senha
$senha = $_POST["senha"];

//validar login

if (efetuarLogin($login, $senha) == true) 
{
    header("Location: principal.php");
    exit();
} else {   
    header("Location: login.php?erro=true");
    exit();
}