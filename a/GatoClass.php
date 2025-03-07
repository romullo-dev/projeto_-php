<?php 

include_once 'AnimalClass.php';

class GatoClass extends AnimalClass
{

    //atributos proprios
    private $peso;

    public function getPeso()
    {
        return $this->peso;
    }

    

    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function informarPeso ( $PesoGato)
    {
        $this->setPeso($PesoGato);
    }

    public function mostrarPeso ( )
    {
        return "<br> O peso é " .$this->getPeso() ."";
    }


    //sobreescrever o metodo
    public function fazerSom ()
    {
        return "Faz miau..";
    }

    //implementar metodo abstrado
    public function dascreverAnimal ( )
    {
        print "<br> AQUI E A DESGRAÇA  O nome do gato é " .$this ->getNome() ."e o peso " .$this->getPeso();
    }

 
}