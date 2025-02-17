<?php

//FUNÃO DE BOAS VINDAS

function boa_vindas () 
{
    echo"Bem vindo Ao sistena DNA";
}

//FUNCAO COM PARAMENTO E SEM RETORNO
function mostrarNome ($nome)
{
    echo "<br> Seu nome é {$nome}";
}

//FUNCAO MOSTRAR DATA ATUALIZADA (SEM PARAMENTRO)
function dataAtual() {
    return date("d-m-y"); 
}

//FUNCAO EFETUAR LOGIN (COM PARAMETRO E COM RETORNO
function efetuarLogin ($login, $senha) 
{
    if (($login == 'maria') and ($senha == "123456" )) {
        return true;
    } else {
        return false;
    }

}
