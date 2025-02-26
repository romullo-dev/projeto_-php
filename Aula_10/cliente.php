<?php
session_start();

//incluir objeto na instancia]

include_once("LoginClass.php");

$acessar = new LoginClass();

$acessar->controlarSessao();
//verificar o botao de salvar 
if (isset($_POST["salvar"])) {
    //pegar dados do cliente

    $nome = htmlspecialchars($_POST["nome_cliente"]);
    $dtn = ($_POST["dataNasc_cliente"]);
    $email = htmlspecialchars($_POST["email_cliente"]);
    $cpf = htmlspecialchars($_POST["cpf_cliente"]);
    $estado = htmlspecialchars($_POST["estado_cliente"]);
    $descricao = htmlspecialchars($_POST["descricao"]);
    // incluir class 
    include_once("clienteClass.php");

    //criar o objeto /instancia de cliente
    $objCliente = new ClienteClass();


    //invocar o metodo inserir
    $objCliente->inseir_cliente($nome, $dtn, $cpf, $email, $descricao, $estado);
}

//verificar se acionou o botão consultar

if (isset($_POST["consultar"])) {

}



