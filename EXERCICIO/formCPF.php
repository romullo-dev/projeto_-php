<?php
session_start();

// Inicializa as variáveis da sessão se não estiverem definidas
if (!isset($_SESSION["mostrar_mensagem"])) {
    $_SESSION["mostrar_mensagem"] = "NAO";
}
if (!isset($_SESSION["mensagem"])) {
    $_SESSION["mensagem"] = "";
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastro CPF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <br>
        <form action="dados.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome_cliente" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_cliente" id="nome_cliente"
                            placeholder="Digite o seu nome">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dataNasc_cliente" class="form-label">Data Nascimento</label>
                        <input type="date" class="form-control" name="dataNasc_cliente" id="dataNasc_cliente">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email_cliente" class="form-label">Endereço</label>
                        <input type="email" class="form-control" name="email_cliente" id="email_cliente"
                            placeholder="Rua avião 132">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="cpf_cliente" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf_cliente" id="cpf_cliente"
                            placeholder="000.000.000-00" maxlength="11" required >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="estados">Estados</label>
                        <select class="form-select" name="estado_cliente">
                            <option value="DF">DF</option>
                            <option value="GO">GO</option>
                            <option value="MT">MT</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="reset" class="btn btn-warning">Cancelar</button>
            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <!-- Modal Bootstrap 5 -->
    <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mensagem</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        <?php echo htmlspecialchars($_SESSION['mensagem'], ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ($_SESSION["mostrar_mensagem"] === "SIM") {
        $_SESSION["mostrar_mensagem"] = "NAO"; // Evita exibir o modal repetidamente
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById('mensagem'));
                myModal.show();
            });
        </script>
        <?php
    }
    ?>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>