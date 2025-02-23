<?php 

class Operacao 
{
    private float $depositar = 0;
    private float $sacar =  0;
    private  float $pagar = 0; 
    private float $valor = 0;

    //GET E SET

    public function setDepositar($depositar)
    {
        $this->depositar = $depositar;
    }

    public function getDepositar()
    {
        return $this ->depositar;
    }

    public function setSacar($sacar)
    {
        $this->sacar = $sacar;
    }

    public function getSacar()
    {
        return $this ->sacar;
    }

    public function setPagar($pagar)
    {
        $this->pagar = $pagar;
    }

    public function getPagar()
    {
        return $this->pagar;
    }

    public function setValor ($valor)
    {
        $this->valor = $valor;
    }

    public function getValor ()
    {
        return $this->valor;
    }


    public function  Depositar($valor)
    { 
        if ($this -> getDepositar() == null) {
            echo 'Digite um numero';
        } else {
            $this-> depositar += $valor;
            $this->valor = $this -> depositar;
            header ('location: operacao.php');
            exit;
        }
    }





}

?>