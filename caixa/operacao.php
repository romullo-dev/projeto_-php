<?php

class Operacao
{
    public function Depositar($valor)
    {
        if (!isset($_SESSION['saldo'])) {
            $_SESSION['saldo'] = 0;
        }

        $_SESSION['saldo'] += $valor;

        header('Location: index.php');
        exit;
    }


    public function sacar ($valor)
    {
        if (!isset($_SESSION['saldo'])) {
            $_SESSION['saldo'] = 0;
        }

        $_SESSION['saldo'] -= $valor;

        header('Location: index.php');
        exit;
    }

    public function pagar ($valor)
    {
        if (!isset($_SESSION['saldo'])) {
            $_SESSION['saldo'] = 0;
        }

        $_SESSION['saldo'] -= $valor;

        header('Location: index.php');
        exit;
    }

}

?>
