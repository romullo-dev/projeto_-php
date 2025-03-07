<?php 

include_once 'AnimalClass.php';

class CachorroClass extends AnimalClass
{

    //metodos proprios
    private $idade ;

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;
        return $this;

    }

    public function infomarIdade ($idadeCachorro)
    {
        $this ->setIdade($idadeCachorro);

    }

    public function mostrarIdade ()
    {
        return "<br> A idade é ". $this -> idade;
    }

    public function fazerSom ()
    {
        return "Faz AU.. AU...";
    }

    public function dascreverAnimal ( )
    {
        print "<br>  AQUI E A DESGRAÇA   O nome do gato é " .$this ->getNome() ."e o peso " .$this->getIdade();
    }

}