<?php
    // ligando classe filha a classe pai
    class Profissional extends Pessoa
    {
        public function __construct(private string $cmv = "",$nome,$telefone){
            parent:: __construct($nome,$telefone);
        }

        //métodos gets

        public function getCmv()
        {
            return $this->cmv;
        }

        //métodos sets

        public function setCmv($cmv)
        {
            $this->$cmv = $cmv;
        }
    }//fim da classe
?>