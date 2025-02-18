<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    $erro = $_GET ["erro"];
    if ($erro == true)
    {
        echo "Login ou senha incorreto";
    } 
    ?>

    <main>
        <form action="validar.php" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" required>
            <br>
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>
            <br>
            <br>
            <input type="reset" value="Limpar">
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>

</html>