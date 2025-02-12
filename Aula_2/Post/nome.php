<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <form action="receberDados.php" method="$_POST">
        <label for="nome_pessoa">Nome</label>
        <input type="text" name = "Nome_pessoa">
        <label for="email_pessoa">Email</label>
        <input type="text" name = "email_pessoa">
        <input type="submit" value="Enviar">
    </form>

    <a href="http://localhost:8081/projeto_php/aula_2/receberDados.php?Nome_pessoa=Romulo&email_pessoa=romulo%40gmail.com">Enviar</a>
    
</body>
</html>