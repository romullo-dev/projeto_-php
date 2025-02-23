<?php 
//iniciar sessao

session_start();

include_once("fun.php");

$acessar = new Login ();

$acessar -> login($_POST ['login'], $_POST ['senha']);
?>