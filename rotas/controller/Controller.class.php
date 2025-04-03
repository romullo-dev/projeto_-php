<?php
//class controller 
class Controller
{
    public function mostrarView($pagina)
    {
        require_once 'views/' . $pagina . '.php';
    }


    //mostrar menu

    public function mostrarMenu()
    {
        print  'Aqui vai mostar o menu..  <br>';
        print '<a href="index.php?principal">Pricipal</a> <br>';
        print '<a href="index.php?cliente">Cliente</a> <br>';
        print '<a href="index.php?fornecedor">Fornecedor</a> <br>';
    }


    public function salvarCliente()
    {
        $objCliente = new cliente ();
        $objCliente->InserirCliente();

        //criar mensagem 
         $mensagem = 'Salvo com secesso';
         print $mensagem;

        //invocar a view
        //$page = 'cliente';
        //$this->mostrarView($page); 
    }

}
