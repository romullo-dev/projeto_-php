<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) { 
    include_once("config.php");    
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);

    $sql = "SELECT * FROM  usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    if ($result->num_rows < 1) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: login.php");
    } else{
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        header("Location: sistema.php");
    }
} else {
    header('location: login.php');
}

?> 