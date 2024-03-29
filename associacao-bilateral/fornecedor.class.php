<?php
    class Fornecedor
    {
        public function __construct(private string $cnpj ="",
                                    private string $razaoSocial ="",
                                    // Criando um atributo para receber dados da classe Produto por associação
                                    private array $produto = array()){}
        
        // métodos gets para poder acessar atributos privados

        public function getCnpj()
        {
            return $this->cnpj;
        }

        public function getRazaoSocial()
        {
            return $this->razaoSocial;
        }

        public function getProduto()
        {
            return $this->produto;
        }

        // métodos sets

        public function setCnpj($cnpj)
        {
            $this->cnpj = $cnpj;
        }

        public function setRazaoSocial($razaoSocial)
        {
            $this->razaoSocial = $razaoSocial;
        }
        
        public function setProduto($produto)
        {
            $this->produto[] = $produto;
        }
    }// fim da classe
?>