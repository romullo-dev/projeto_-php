<?php

session_start();

class ClienteClass
{
    //atributos
    private $nome_cliente;
    private $email_cliente;
    private $descricao;
    private $estado_cliente;

    //get & set 
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * Set the value of nome_cliente
     */
    public function setNomeCliente($nome_cliente): self
    {
        $this->nome_cliente = $nome_cliente;

        return $this;
    }

    /**
     * Get the value of email_cliente
     */
    public function getEmailCliente()
    {
        return $this->email_cliente;
    }

    /**
     * Set the value of email_cliente
     */
    public function setEmailCliente($email_cliente): self
    {
        $this->email_cliente = $email_cliente;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of estado_cliente
     */
    public function getEstadoCliente()
    {
        return $this->estado_cliente;
    }

    /**
     * Set the value of estado_cliente
     */
    public function setEstadoCliente($estado_cliente): self
    {
        $this->estado_cliente = $estado_cliente;

        return $this;
    }




    //metodos
    public function inseir_cliente($nome, $email, $descricao, $estado)
    {
        //setar valores
        $this->setNomeCliente($nome);
        $this->setEmailCliente($email);
        $this->setDescricao($descricao);
        $this->setEstadoCliente($estado);

        //conectar com o bancodew dados insere os dados

        $resultado = true;

        //testar o resultado
        if ($resultado == true) {
            //mensagem
            $_SESSION["mensagem"] = 'Cliente cadastrado com sucesso';
            $_SESSION['mostrar_mensagem'] = 'SIM';
            header('location: inserir.php');
        } else {
            $_SESSION['mensagem'] = 'Erro';
            $_SESSION['mostrar_mensagem'] = 'SIM';
            header('location: inserir.php');
        }

    }
}