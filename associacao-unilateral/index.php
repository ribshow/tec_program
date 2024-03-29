<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    // Instanciar significar criar um objeto a partir de uma classe
    // primeiro cria-se o objeto antes de chama-lo na associação

    $produto = new Produto("Caixa de lápis de cor","Contém 24 cores", 30.50);
    $fornecedor = new Fornecedor("1234321-1","Faber Castel",$produto);
    
    /*
    echo "<pre>";
    var_dump($fornecedor);
    echo "<pre>";
    */

    echo "<h1>Fornecedor</h1>";
    echo "CNPJ: {$fornecedor->getCnpj()}</br>";
    echo "Razão Social: {$fornecedor->getRazaoSocial()}</br>";
    
    echo "<h2 style='color:blue'>Produtos</h2>";
    echo "Nome: {$fornecedor->getProduto()->getNome()}</br>";
    echo "Descricao: {$fornecedor->getProduto()->getDescricao()}</br>";
    echo "Preço: ".number_format($fornecedor->getProduto()->getPreco(),2,",",".")."<br>";
?>