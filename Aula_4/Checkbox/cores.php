<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Oculto</title>
</head>
<body>
    <form action="processar_cor.php" method="post">
        <label for="cor">Qual o seu time do coração</label>
        <br><br>
        <input type="checkbox" name="cor[]" id="" value="Amarelo">Amarelo<br>
        <input type="checkbox" name="cor[]" id="" value="Vermelho"> Vermelho <br>
        <input type="checkbox" name="cor[]" id="" value="Azul"> Azul<br>
        <input type="checkbox" name="cor[]" id="" value="Branco"> Branco<br>
        <br>
        <input type="submit" value="Enviar" >
    </form>
</body>
</html>