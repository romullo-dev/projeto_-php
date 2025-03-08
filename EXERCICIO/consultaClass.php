<?php
session_start();
class consultaClass
{
    private $cpf;
    private $cnpj;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    //verificar se o CPF é verdadeiro

    public function cunsutarCPF ($cpf){
        $this->cpf = $cpf;

        if (strlen( $this->getCpf()) > 11) {
            $_SESSION ["mensagem"] = 'Por favor, insira um CPF válido';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCPF.php');
        } elseif (strlen( $this->getCpf()) < 11) {
            $_SESSION ["mensagem"] = 'Por favor, insira um CPF válido';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCPF.php');
        } else {
            $_SESSION ["mensagem"] = 'Cliente Cadastrado com sucesso';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCPF.php');
        }
    }

    //verificar se o CNPJ é verdadeiro
    public function cunsutarCNPJ ($cnpj){
        $this->cnpj = $cnpj;

        if (strlen( $this->getCnpj()) > 14) {
            $_SESSION ["mensagem"] = 'Por favor, insira um CNPJ válido';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCNPJ.php');
        } elseif (strlen( $this->getCnpj()) < 14) {
            $_SESSION ["mensagem"] = 'Por favor, insira um CNPJ válido';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCNPJ.php');
        } else {
            $_SESSION ["mensagem"] = 'Empresa Cadastrada com sucesso';
            $_SESSION ['mostrar_mensagem'] = 'SIM';
            header('location: formCNPJ.php');
        }
    }




}