<?php
    class Servico
    {
        public function __construct(private string $descricao = "",
                                    private float $preco = 0){}

        // métodos gets

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function getPreco()
        {
            return $this->preco;
        }
        // métodos sets

        public function setDescricao($descricao)
        {
            $this->$descricao = $descricao;
        }

        public function setPreco($preco)
        {
            $this->$preco = $preco;
        }
    }
?>