<?php
    class Produto
    {
        public function __construct(private string $nome ="",
                                    private string $descricao ="",
                                    private float $preco = 0.00){}
        
        // métodos gets para poder acessar atributos privados

        public function getNome()
        {
            return $this->nome;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function getPreco()
        {
            return $this->preco;
        }

        // métodos sets

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }
        public function setPreco($preco)
        {
            $this->preco = $preco;
        }
    }// fim da classe
?>