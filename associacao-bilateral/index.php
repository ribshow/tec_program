<?php
    // apontando para os arquivos onde estão as classes
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    $fornecedor1 = new Fornecedor("99997777","Faber Castel");

    $produto = new Produto("Lápis preto","Lápis preto n°2", 1.00, array($fornecedor1));

    $fornecedor2 = new Fornecedor("54755555","Bic");

    $produto->setFornecedor($fornecedor2);

    /*
    echo "<pre>";
    var_dump($produto);
    echo "<pre>";
    */

    echo "<h1>Produto</h1>";
    echo "Nome: {$produto->getNome()}<br>";
    echo "Descrição: {$produto->getDescricao()}<br>";
    echo "preco: R$".number_format($produto->getPreco(), 2 , "," , ".")."<br>";
    
    echo "<h2>Fornecedor</h2>";
    foreach($produto->getFornecedor() as $objeto_fornecedor)
    {
        echo "CNPJ:{$objeto_fornecedor->getCnpj()}<br>";
        echo "Razão social: {$objeto_fornecedor->getRazaoSocial()}<br>";
    }



?>