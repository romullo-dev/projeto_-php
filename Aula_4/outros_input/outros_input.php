<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Oculto</title>
</head>
<body>
    <form action="processar_outros.php" method="post">
        <label for="email_cliente">Email</label>
        <input type="email" name="email_cliente" >

        <label for="idade_cliente">Idade</label>
        <input type="number" name="idade_cliente" >

        <br>
        <br>

        <label for="observacao">observação</label>
        <textarea value="" name="observacao" rows="3"></textarea>
        

        <label for="senha">Senha</label>
        <input type="password" name="Senha" id="">

        <label for="data">Data</label>
        <input type="date" name="data" id="">

        <input type="submit" value="Enviar" >
    </form>
</body>
</html>