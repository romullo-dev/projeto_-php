<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Oculto</title>
</head>
<body>
    <form action="processar_oculto.php" method="post">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente" >
        <input type="hidden" name="id_cliente" value="1" >
        <input type="submit" value="Enviar">
    </form>
</body>
</html>