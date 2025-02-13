<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Net Lanches - Fast Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-success">Net Lanches - Fast Food</h2>
        <form action="calc.php" method="post">
            <div class="mb-3">
                <label for="cliente" class="form-label fw-bold text-primary">Nome do Cliente:</label>
                <input type="text" class="form-control" id="cliente" placeholder="Digite seu nome" name="nome" >
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Lanches</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">Cachorro-Quente</a></td>
                        <td>R$ 1.50</td>
                        <td><input type="number" class="form-control" min="0" name="cachorro" ></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">X-Salada</a></td>
                        <td>R$ 3.00</td>
                        <td><input type="number" class="form-control" min="0" name="salada"></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">X-Burger</a></td>
                        <td>R$ 2.00</td>
                        <td><input type="number" class="form-control" min="0" name="burg"></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">Batata Frita</a></td>
                        <td>R$ 2.50</td>
                        <td><input type="number" class="form-control" min="0" name="batata"></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">X-Tudo</a></td>
                        <td>R$ 4.50</td>
                        <td><input type="number" class="form-control" min="0" name="x"></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-decoration-none text-primary">Refrigerante Lata</a></td>
                        <td>R$ 2.00</td>
                        <td><input type="number" class="form-control" min="0" name="refri"></td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Limpar Comanda</button>
                <button type="submit" class="btn btn-success">Enviar Pedido</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
