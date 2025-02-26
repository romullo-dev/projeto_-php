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
                <div class="col-3">
                    <div class="mb-3">
                        <label for="nome_cliente" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_cliente" id="nome_cliente"
                            placeholder="Digite o seu nome">
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

            <button type="submit" name="consultar" class="btn btn-primary"><i class="bi bi-search"></i> Consultar</button>
        </form>
        <br>
        <hr>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">MAria</th>
      <td>12345678956</td>
      <td>ass@mdo</td>
      <td>15/02/2000</td>
    </tr>
    <tr>
      <th scope="row">Jacob</th>
      <td>125454454551</td>
      <td>@fat</td>
      <td>15/02/2000</td>
    </tr>
  </tbody>
</table>

    </div>




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