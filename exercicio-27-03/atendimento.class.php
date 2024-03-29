<?php
    // setando fuso-horário de são paulo
    date_default_timezone_set("America/Sao_Paulo");
    class Atendimento
    {
        public function __construct(private string $dataAtendimento = "",
                                    private $profissional = "",
                                    private array $cachorro = array(),
                                    private array $servico = array()){}

        // métodos gets

        public function getdataAtendimento()
        {
            return $this->dataAtendimento;
        }

        public function getProfissional()
        {
            return $this->profissional;
        }

        public function getCachorro()
        {
            return $this->cachorro;
        }

        public function getServico()
        {
            return $this->servico;
        }
        // métodos sets

        public function setdataAtendimento($dataAtendimento)
        {
            $this->$dataAtendimento = $dataAtendimento;
        }
        public function setProfissional($profissional)
        {
            $this->$profissional = $profissional;
        }

        public function setCachorro($cachorro)
        {
            $this->$cachorro[] = $cachorro;
        }

        public function setServico($servico)
        {
            $this->$servico[] = $servico;
        }
    }// fim da classe
?>