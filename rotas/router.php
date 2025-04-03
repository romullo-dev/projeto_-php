<?php

//ROTAS DE PAGINAS (NAVEGAÇÃO DO SISTEMA)

//INDEX.PHP?CLIENTE
//exemplo: index.php?cliente
$url = explode('?',$_SERVER['REQUEST_URI']); 
//escolher na variavel $url do link desejado 
$pagina = $url[1];

//invocar o metodo do controller 
if (isset($pagina)){  
    $objController = new Controller();
    $objController->mostrarView($pagina);
}

//ROTAS DE AÇÃO (ACÕES DOS BOTÕES)

//salvar cliente
if (isset($_POST['salvar_cliente'])) {  
    //instanciar o controller (criar o objeto)
    $objController = new Controller();
    //pagar os dados
    $dados1 = $_POST['alguma coisa1'];
    $dados2 = $_POST['alguma coisa2'];
    //invocar o metodo do controller de salvar cliente 
    $objController->salvarCliente();
}
