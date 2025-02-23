<?php 

class Login 
{
    private $username = null;  
    private $password = null;

    #get e set
    public function setUsername ($username) 
    {
        $this->username = $username;
    }

    public function getUsername ()
    {
        return $this -> username;
    }

    public function setPassword ($password)
    {
        $this->password = $password;
    }

    public function getPassword ()
    {
        return $this -> password;
    }

    public function login($username, $password)
    {
        $this-> setUsername ( $username );
        $this -> setPassword ( $password );

        if ($this -> getUsername() == 'franca' && $this -> getPassword() == '123456'){
            $_SESSION ['username'] = $username;
            header (header: 'location: principal.php');
            exit;
        } else {
            echo "login ou senha incorreta";
        }
    }
    public function controlarSessao()
    {
        // Verifica se tem sessão ativa
        if (!isset($_SESSION['username'])) {
            $_SESSION['erro'] = "Efetuar login";
            $_SESSION['erro'] = true;

            header('location: index.php');
            exit;
        }
    }

}



?>