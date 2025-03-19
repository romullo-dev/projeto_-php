<?php

include_once("conexao.php");

if (isset( $_POST["login"])|| isset($_POST["senha"])) {
    if (strlen($_POST["login"]) == 0){
        echo "Por favor, digite um email";
    } else if (strlen($_POST["senha"]) == 0) {
        echo "Por favor, digite uma senha";
    } else {
        $login = $sql->real_escape_string ( $_POST["login"]); 
        $senha = $sql->real_escape_string ( $_POST["senha"]); 

        $sqlCode = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
        $sql_query =  $sql->query($sqlCode ) or die ("Falha na conexão do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1 ) {
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION )){
                session_start();
            }

            $_SESSION['id'] = $usuario ['id'];
            $_SESSION['nome'] = $usuario ['nome'];

            header('Location: home.php');
            exit;
        } else {
            echo 'Falha ao logar!';
        }

    }
}



?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body class="bg-primary">
    <header>
        <!-- place navbar here -->
    </header>

    <body>
        <main>
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="bg-white p-5 rounded shadow" style="width: 100%; max-width: 400px;">
                    <form action="index.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Login</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <!--<button type="submit" class="btn btn-secondary">Cadastrar</button>  -->
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>

</html>