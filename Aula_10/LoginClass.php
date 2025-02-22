<?php

// Classe Login
class LoginClass
{
    // Atributos
    private $login = null;
    private $senha = null;

    // Getters e Setters
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;  
    }

    public function getSenha()
    {
        return $this->senha;
    }

    // Método de Login
    public function efetuarLogin($login, $senha)
    {
        $this->setLogin($login);
        $this->setSenha($senha);

        // Verificação do login e senha
        if ($this->getLogin() == 'maria' && $this->getSenha() == '123456') {
            $_SESSION['login'] = $login;
            header('Location: principal.php');
            exit(); 
        } else {
            // Se o login 
            echo "Login ou senha incorretos!";
        }
    }

    public function controlarSessao()
    {
        //verificar ser tem sessã ativa
        if (!isset($_SESSION['login'])) {
            $_SESSION ['erro'] ="Efetuar login";
            $_SESSION ['erro'] = true ;

            header('location: index.php');
        }
}

}
