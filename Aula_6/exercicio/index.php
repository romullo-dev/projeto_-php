<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora eletronica</h2>
    <form action="post.php" method="post">
        <label for="num_1">Numero 1 </label>
        <input type="number" name="num_1" >
        <label for="num_2">Numero 2 </label>
        <input type="number" name="num_2" >

        <select name="operacao" id="operacao">
            <option value="Adicão">+</option>
            <option value="Subtracao">-</option>
            <option value="Multiplicacao">*</option>
            <option value="Divisao">/</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>