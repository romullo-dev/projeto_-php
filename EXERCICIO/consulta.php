<?php

class consulta 
{
    private $cpf;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function cunsutar (){
        $this->cpf = $cpf;  
    }
}