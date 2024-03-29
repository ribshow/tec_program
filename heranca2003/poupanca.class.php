<?php
    // extends diz de que classe vai herdar
    // setando o fuso horário de são paulo
    date_default_timezone_set("America/Sao_Paulo");
    class poupanca extends conta
    {
        public function __construct(
            private int $aniversario=0,
            $agencia, $conta, $saldo)
            {
                // chamando o construtor da classe pai
                parent:: __construct($agencia, $conta, $saldo);
            }
    

    // métodos gets
    public function getAniversario()
    {
        return $this->aniversario;
    }
    //métodos sets
    public function setAniversario($aniversario)
    {
        // atributo      //parâmetro
        $this->aniversario = $aniversario;
    }
    public function retirar($valor)
    {
        if(date("d") < $this->aniversario)
        {
            echo "Os juros não foram creditados.<br>";
        }
        else if($this->saldo >= $valor)
        {
            parent:: retirar($valor);
        }
        else
        {
            echo "Saldo insuficiente.<br>";
        }
    }
}
?>