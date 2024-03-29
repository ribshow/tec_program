<?php
    // setando fuso-horário de são paulo
    date_default_timezone_set("America/Sao_Paulo");
    class Cachorro
    {
        public function __construct(private string $nome = "",
                                    private string $cor = "",
                                    private string $raca = "",
                                    private string $dataNascimento = "",
                                    private $proprietario = ""){}

        // métodos gets

        public function getNome()
        {
            return $this->nome;
        }

        public function getCor()
        {
            return $this->cor;
        }

        public function getRaca()
        {
            return $this->raca;
        }

        public function getdataNascimento()
        {
            return $this->dataNascimento;
        }

        public function getProprietario()
        {
            return $this->proprietario;
        }
        // métodos sets

        public function setNome($nome)
        {
            $this->$nome = $nome;
        }

        public function setCor($cor)
        {
            $this->$cor = $cor;
        }

        public function setRaca($raca)
        {
            $this->$raca = $raca;
        }

        public function setdataNascimento($dataNascimento)
        {
            $this->$dataNascimento = $dataNascimento;
        }

        public function setProprietario($proprietario)
        {
            $this->$proprietario = $proprietario;
        }
    }// fim da classe
?>