<?php
//iniciar sessao
session_start();
//incluir a classe LoginClass
include_once "LoginClass.php";
//criar objeto/instancia
$acessar = new LoginClass();
//verificar se fez login
$acessar->controlarSessao();

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Sistema XYZ</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="principal.php">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-people-fill"></i> Cliente
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="consultar.php"> <i class="bi bi-search"></i> Consultar</a></li>
                            <li><a class="dropdown-item" href="inserir.php"><i class="bi bi-file-earmark-plus"></i> Inserir</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> <?php print strtoupper($_SESSION['login']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-right"></i> Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <form method="post" action="cliente.php">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nome_cliente" class="form-label">Nome</label>
                    <input type="text" name="nome_cliente" class="form-control" id="nome_cliente" placeholder="Digite o nome completo...">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="cpf_cliente" class="form-label">CPF</label>
                    <input type="text" name="cpf_cliente" class="form-control" id="cpf_cliente">
                </div>
            </div>
        <div>
        <button type="submit" name="consultar" class="btn btn-primary"><i class="bi bi-search"></i> Consultar</button>
        </form>
        <br>
        <hr>

        <?php
        //verificar se tem dados para mostrar
            if (isset($_SESSION['resultado'])) {
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Data Nascimento</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($_SESSION['resultado'] as $key => $valor) {
                    print "<tr>";
                    print "<td>{$valor['nome']}</td>";
                    print "<td>{$valor['cpf']}</td>";
                    print "<td>{$valor['email']}</td>";
                    print "<td>{$valor['data_nasc']}</td>";
                    print '<td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#alterar'.$valor['senha'].'"><i class="bi bi-pencil-fill"></i></button>';
                    print ' <button type="button" class="btn btn-danger btn-sm"> <i class="bi bi-file-x-fill"></i></button></td>';
                    print "</tr>";
                }
            ?>
            </tbody>
        </table>




        <?php
            } 
            else 
            {
                print "Sem dados...";
            }
        //reset de $_SESSION['resultado']
        //unset($_SESSION['resultado']);    
        ?>
    </div>

        <!-- Modal de Alterar -->
        <?php
            foreach ($_SESSION['resultado'] as $key_alterar => $valor_alterar) {
        ?>
        <div class="modal fade" id="alterar<?php print $valor_alterar['senha']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                        <label for="nome_cliente" class="form-label">Nome</label>
                        <input type="text" value="<?php print $valor_alterar['nome']; ?>" name="nome_cliente" class="form-control" id="nome_cliente" placeholder="Digite o nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email_cliente" class="form-label">CPF</label>
                        <input type="text" value="<?php print $valor_alterar['cpf']; ?>" name="email_cliente" readonly class="form-control" id="email_cliente" placeholder="nome@teste.com">
                    </div>
                    <div class="mb-3">
                        <label for="email_cliente" class="form-label">E-mail</label>
                        <input type="email" value="<?php print $valor_alterar['email']; ?>" name="email_cliente" class="form-control" id="email_cliente" placeholder="nome@teste.com">
                    </div>
                    <div class="mb-3">
                    <label for="descricao_cliente" class="form-label">Descrição</label>
                    <textarea class="form-control"  name="descricao_cliente" id="descricao_cliente" rows="3">
                        <?php print $valor_alterar['']; ?>
                </textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>

    

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
