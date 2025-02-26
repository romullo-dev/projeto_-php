<?php
session_start();

//incluir objeto na instancia]

include_once("LoginClass.php");

$acessar = new LoginClass();

$acessar->controlarSessao();



?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sitema</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sitema de Desenvolvimento</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="principal.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people-fill"></i> Cliente
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="consultar.php"><i class="bi bi-search"></i> Consultar</a>
                            </li>
                            <li><a class="dropdown-item" href="inserir.php"><i class="bi bi-file-earmark-plus"></i>
                                    Inserir</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo strtoupper($_SESSION['login']) ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-right"></i> Sair
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="container-fluid">
        <br>
        <form action="cliente.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome_cliente" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_cliente" id="nome_cliente"
                            placeholder="Digite o seu nome">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dataNasc_cliente" class="form-label">Data Nascimento</label>
                        <input type="date" class="form-control" name="dataNasc_cliente" id="dataNasc_cliente">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email_cliente" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_cliente" id="email_cliente"
                            placeholder="name@example.com">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="cpf_cliente" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf_cliente" id="cpf_cliente"
                            placeholder="000.000.000-00" maxlength="11">
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="estados">Estados</label>
                        <select class="form-select" name="estado_cliente" aria-label="Default select example">
                            <option value="DF">DF</option>
                            <option value="GO">GO</option>
                            <option value="MT">MT</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">


                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>

            <button type="reset" class="btn btn-warning">Cancelar</button>
            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        <?php print $_SESSION['mensagem'] ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    if ($_SESSION["mostrar_mensagem"] == "SIM") { 
        $_SESSION ['mostrar_mensagem'] = 'NAO'?>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById('mensagem'));
                myModal.show();
            });
        </script>
    <?php } else {
        $_SESSION["mostrar_mensagem"] = "NAO";
    }
    ?>



    <br><br>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>