<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Oculto</title>
</head>
<body>
    <form action="processar_cidade.php" method="post">
        <label for="cor">Qual a sua cidade</label>
        <br><br>
        <select name="cidade" id="">
            <option value="Recanto">Recanto</option>
            <option value="Samambaia">Samambaia</option>
            <option value="Aguas">Aguas</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar" >
    </form>
</body>
</html>