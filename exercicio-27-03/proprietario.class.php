<?php
    // ligando a classe filha proprietario a classe pai pessoa
    class Proprietario extends Pessoa
    {
        public function __construct(private string $cpf = "",
                                    $nome,
                                    $telefone,
                                    private array $cachorro = array()
        )
        {
            parent:: __construct($nome, $telefone);
        }
          // métodos gets

        public function getCpf()
        {
        return $this->cpf;
        }

        public function getCachorro()
        {
            return $this->cachorro;
        }

        // métodos sets
        public function setCpf($cpf)
        {
            $this->$cpf = $cpf;
        }

        public function setCachorro($cachorro)
        {
            $this->$cachorro[] = $cachorro;
        }
    }// fim da classe
?>