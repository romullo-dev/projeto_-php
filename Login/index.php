<?php
include_once ('conexao.php');

if (isset($_POST['login']) || isset($_POST['senha'])) {
    if (strlen($_POST['login']) == 0) {
        echo 'Preencha seu email';
    } else if (strlen($_POST['senha']) == 0) {
        echo 'Preencha sua senha';
    } else {
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na conexão do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if (!isset ($_SESSION)) {
                session_start();
            }
            $_SESSION ['id'] =  $usuario['id'];
            $_SESSION ['nome'] =  $usuario['nome'];

            header("location: principal.php");

        } else {
            echo "Falha ao logar! E-mail ou Senha Incorretos";
        }
    }
}

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="index.php" method="post">
                <div class="container">
                <h1>Acesse sua conta</h1>

                <div class="mb-7">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="login"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    <div class="mb-6">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="senha"
                            id=""
                            placeholder=""
                        />
                    </div>
                    <br>

                    <button
                        type="submit"
                        class="btn btn-success"
                    >
                        Entra
                    </button>

                
                    
                    
                 
                    


                </div>
                
                    
                   
                </div>
                
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
