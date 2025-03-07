<?php

//class animal

abstract class AnimalClass 
{
    private $nome;

    //metodo construtor
    public function __construct($nome_animal)
    {
        $this-> setNome($nome_animal);
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function fazerSom ()
    {
        return "O animal faz som";
    }

    //construir um metodo 
    abstract  function dascreverAnimal ();
 
}