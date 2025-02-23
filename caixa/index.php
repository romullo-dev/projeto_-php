<?php
session_start();
include_once("operacao.php");

$operaDepositar = new Operacao();

if (isset($_POST["valor"]) && isset($_POST["acao"])) {
    $valor = $_POST["valor"];
    $acao = $_POST["acao"];

    switch ($acao) {
        case "Depositar":
            $operaDepositar->Depositar($valor);
            break;
        case "Sacar":
            $operaDepositar -> sacar ($valor);
            break;
        case "Pagar":
            $operaDepositar -> pagar($valor);
            break;
    }
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f8;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-custom {
            border-radius: 50px;
            color: #fff;
            width: 100%;
        }

        .btn-depositar {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-depositar:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-sacar {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }

        .btn-sacar:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-pagar {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-pagar:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Banco Simples</h1>
        <div class="card p-4">
            <h3 class="text-center mb-4">Saldo: R$ <span id="saldo"><?= isset($_SESSION['saldo']) ? $_SESSION['saldo'] : '0.00' ?></span></h3>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor" placeholder="Digite o valor" name="valor" required>
                </div>
                <input type="hidden" name="acao" id="acao" value="">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-custom btn-depositar" onclick="document.getElementById('acao').value='Depositar'">Depositar</button>
                    <button type="submit" class="btn btn-custom btn-sacar" onclick="document.getElementById('acao').value='Sacar'">Sacar</button>
                    <button type="submit" class="btn btn-custom btn-pagar" onclick="document.getElementById('acao').value='Pagar'">Pagar Conta</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
