<?php
    require_once "pessoa.class.php";
    require_once "proprietario.class.php";
    require_once "profissional.class.php";
    require_once "cachorro.class.php";
    require_once "atendimento.class.php";
    require_once "servico.class.php";

    // criando um objeto pessoa
    $pessoa1 = new Pessoa("Galvão Bueno", "(14)3222-4560");
    $pessoa2 = new Pessoa("Carmem Lúcia", "(11)1199-3754");

    // criando um objeto proprietário
    $proprietario1 = new Proprietario("444.555.666-77",$pessoa1->getNome(),$pessoa1->getTelefone());

    // criando um objeto profissional
    $profissional1 = new Profissional("757770-3",$pessoa2->getNome(),$pessoa2->getTelefone());

    // Criando um objeto cachorro
    $cachorro1 = new Cachorro("Azulão","Preto e branco","Vira-lata","22-03-2020",$proprietario1->getNome());

    // criando um objeto serviço
    $servico1 = new Servico("Banho Premium",120.00);

    // criando um objeto atendimento
    $atendimento = new Atendimento(
                        "25-04-2024",$profissional1->getNome(),array($cachorro1),
                        array($servico1)
                        );
    echo "<h1 style='text-align:center'>Ficha de atendimento</h1>";          
    foreach($atendimento->getCachorro() as $objeto_dog)
    {
        echo "<h2>Proprietário</h2>";
        echo "<p style='border:1px solid; background-color: lightgray'>Dono: {$objeto_dog->getProprietario()}<br></p>";
        echo "<h2>Animal</h2>";
        echo "<p style='border:1px solid; background-color: lightgray'>Nome PET: {$objeto_dog->getNome()}<br>";
        echo "Raça: {$objeto_dog->getRaca()}<br>";
        echo "Cor: {$objeto_dog->getCor()}<br>";
        echo "Data Nascimento: {$objeto_dog->getdataNascimento()}<br></p>";
    }

    foreach($atendimento->getServico() as $objeto_job)
    {
        echo "<h2>Serviços</h2>";
        echo "<p style='border:1px solid; background-color: lightgray'> Descrição: {$objeto_job->getDescricao()}<br>";
        echo "Preco: R$".number_format($objeto_job->getPreco(),2,',','.')."</p>";
    }
    echo "<h2>Data do atendimento</h2>";
    echo "<p style='border:1px solid; background-color: lightgray'>Data do atendimento: {$atendimento->getdataAtendimento()}</p>";
    
    echo "<h2>Veterinário</h2>";
    echo "<p style='border:1px solid; background-color: lightgray'>Doutor(a): {$atendimento->getProfissional()}</p>";
    ?>