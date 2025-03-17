<?php
//classe de controle
class Controller
{
    //atributos

    //métodos

    //redirecionar pagina
    public function redirecionar($pagina)
    {
        //iniciar sessao
        session_start();
        //incluir menu
        $menu = $this->menu();
        //incluir a view
        require_once 'view/' . $pagina . '.php';
    }

    //validar login
    public function validar($email, $senha)
    {
        //instanciar a classe Usuário
        $objUsuario = new Usuario();
        //validar usuario
        if ($objUsuario->validarLogin($email, $senha) == true) {
            //iniciar sessao
            session_start();
            //iniciar variaves de sessao
            $_SESSION['email'] = $email;
            //menu
            $menu = $this->menu();
            //incluir a view
            include_once 'view/principal.php';
        } else {
            include_once 'login.php';
            $this->mostrarMensagem("Login ou senha inválidos!");
        }
    }

    public function inserir_autor($nome_autor)
    {
        //instanciar a classe Autor
        $objAutor = new Autor();
        //invocar o método
        if ($objAutor->inserirAutor($nome_autor) == true) {
            //iniciar sessao
            session_start();
            //inserir menu
            $menu = $this->menu();
            //incluir a view
            include_once 'view/consultar.php';
            //mostrar mensagem
            $this->mostrarMensagem("Autor inserido com sucesso!");
        } else {
            //iniciar sessao
            session_start();
            //inserir menu
            $menu = $this->menu();
            //incluir a view
            include_once 'view/consultar.php';
            //mostrar mensagem
            $this->mostrarMensagem("Erro ao inserir autor!");
        }
    }

    //mostrar menu
    public function menu()
    {
        print '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
        print '<div class="container-fluid">';
        print '    <a class="navbar-brand" href="#"></a>';
        print '    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
        print '        <span class="navbar-toggler-icon"></span>';
        print '    </button>';
        print '    <div class="collapse navbar-collapse" id="navbarNav">';
        print '        <ul class="navbar-nav me-auto">';
        print '            <li class="nav-item">';
        print '                <a class="nav-link" href="index.php?principal">Início</a>';
        print '            </li>';
        print '            <li class="nav-item dropdown">';
        print '                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
        print '                    <i class="bi bi-people-fill"></i> Autor';
        print '                </a>';
        print '                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
        print '                    <li><a class="dropdown-item" href="index.php?consultar"> <i class="bi bi-search"></i> Consultar</a></li>';
        print '                    <li><a class="dropdown-item" href="index.php?inserir"><i class="bi bi-file-earmark-plus"></i> Inserir</a></li>';
        print '                </ul>';
        print '            </li>';
        print '        </ul>';
        print '        <ul class="navbar-nav ms-auto">';
        print '            <li class="nav-item dropdown">';
        print '                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
        print '                    <i class="bi bi-person-fill"></i>' . $_SESSION['email'];
        print '                </a>';
        print '                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
        print '                    <li><a class="dropdown-item" href=""><i class="bi bi-box-arrow-right"></i> Sair</a></li>';
        print '                </ul>';
        print '            </li>';
        print '        </ul>';
        print '    </div>';
        print '</div>';
        print '</nav>';
    }

    public function mostrarMensagem($mensagem)
    {
        //<!-- Modal -->
        print '<div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        print '  <div class="modal-dialog">';
        print '    <div class="modal-content">';
        print '      <div class="modal-header">';
        print '        <h5 class="modal-title" id="exampleModalLabel">Informação</h5>';
        print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        print '      </div>';
        print '      <div class="modal-body">';
        print '        <div class="alert alert-warning" role="alert">';
        print $mensagem;
        print '        </div>';
        print '      </div>';
        print '      <div class="modal-footer">';
        print '        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>';
        print '      </div>';
        print '    </div>';
        print '  </div>';
        print '</div>';

        //JS
        print '<script>';
        print '    document.addEventListener("DOMContentLoaded", function() {';
        print '    var myModal = new bootstrap.Modal(document.getElementById("mensagem"));';
        print '    myModal.show();});';
        print '</script>';

    }
}
