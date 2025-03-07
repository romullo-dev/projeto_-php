<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro CPF</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



<body>
    <div class="container-fluid">
        <br>
        <form action="classCpf.php" method="post">
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
                        <input type="date" class="form-control"  name="dataNasc_cliente" id="dataNasc_cliente">
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
                            placeholder="000.000.000-00" maxlength="11">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="estados">Estados</label>
                        <select class="form-select" name="estado_cliente" aria-label="Default select example">
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









    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
    </form>




    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>