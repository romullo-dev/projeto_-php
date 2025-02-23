<?php

//iniciar sessao
session_start();
//incluindo a classe
include_once("LoginClass.php");

//criar objeto/instancia
$acessar = new LoginClass();
//invocar o metodo
$acessar ->efetuarLogin($_POST['login'],$_POST['senha']);