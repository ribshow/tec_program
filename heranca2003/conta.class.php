<?php
    // final não permite que uma classe possua filhos
    // abstract não permite que a herança, crie objetos a partir da classe conta
    abstract class conta
    {
        public function __construct(
            protected string $agencia="",
            protected string $conta="",
            protected float $saldo=0.00){}
    

    // métodos gets
    public function getAgencia()
    {
        return $this->agencia;
    }
    public function getConta()
    {
        return $this->conta;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }

    //métodos sets
    public function setAgencia($agencia)
    {
        // atributo      //parâmetro
        $this->agencia = $agencia;
    }
    public function setConta($conta)
    {
        $this->conta = $conta;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function retirar($valor)
    {
        $this->saldo -= $valor;
        //$this->saldo = $this->saldo - $valor;
    }
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
} //fim da classe
?>
