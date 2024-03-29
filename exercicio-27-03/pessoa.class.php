<?php
    class Pessoa
    {
        public function __construct(private string $nome = "",
                                    private string $telefone = ""){}
        
        // métodos gets

        public function getNome()
        {
            return $this->nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        // métodos sets

        public function setNome($nome)
        {
            $this->$nome = $nome;
        }

        public function setTelefone($telefone)
        {
            $this->$telefone = $telefone;
        }
    }// fim da classe
?>