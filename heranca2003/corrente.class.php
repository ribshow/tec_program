<?php
    // extends diz de que classe vai herdar
    class corrente extends conta
    {
        public function __construct(
            private float $limite=0.00,
            $agencia, $conta, $saldo)
            {
                // chamar o construtor do pai
                parent:: __construct($agencia, $conta, $saldo);
            }
    

    // métodos gets
    public function getLimite()
    {
        return $this->limite;
    }
    //métodos sets
    public function setLimite($limite)
    {
        // atributo      //parâmetro
        $this->limite = $limite;
    }
    public function retirar($valor)
    {
        if($this->saldo + $this->limite >= $valor)
        {
            parent:: retirar($valor);
        }
        else
        {
            echo "Saldo insuficiente";
        }
    }
} // fim da classe
?>