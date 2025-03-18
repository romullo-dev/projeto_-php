<?php

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
//escolher na variável $url do link desejado
$pagina = $url[1];

#ROTAS DE REDIRECIONAMENTO
//redirecionar para principal
if (isset($pagina)) {
    $objController = new Controller();
    $objController->redirecionar($pagina);
}

#ROTAS DE ACAO
//verificar o botao login foi acionado
if (isset($_POST['login'])) {
    //instanciar controller
    $objController = new Controller();
    //dados
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    //invocar o método de validar
    $objController->validar($email, $senha);
}

//inserir autor
if (isset($_POST['inserir_autor'])) {
    //instanciar controller
    $objController = new Controller();
    //dados
    $nome_autor = htmlspecialchars($_POST['nome_autor']);
    //invocar o método de inserir_autor
    $objController->inserir_autor($nome_autor);
}


// consultar autor
if (isset($_POST['consultar_autor'])) {
    //instanciar controller
    $objController = new Controller();
    //dados
    $nome_autor = htmlspecialchars($_POST['nome_autor']);
    //invocar o método de consultar_autor
    $objController->consultar_autor($nome_autor);
}
router
