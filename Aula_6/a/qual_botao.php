<?php

//Qual o botao foi clicado
if(isset($_POST["salvar"])) 
{
    echo 'apertei salvar';
} elseif (isset($_POST["Sair"])) 
{
    echo 'apertei Sair';
} elseif (isset($_POST["Cancelar"])) 
{
    echo 'apertei Cancelar';
}
    