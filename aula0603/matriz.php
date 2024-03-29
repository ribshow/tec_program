<?php

    $vetor = array("nome"=>"Maria","idade"=>12,"peso"=>57.2);

    foreach($vetor as $ind => $valor)
    {
        echo "$ind: $valor<br/>";
    }
/*
if($_GET)
{
    $vetor = $_GET["vetor"];
    // Recurso de programador
    echo "<pre>";
    var_dump($vetor);
    echo "<pre>";

/*
    foreach($vetor as $valor)
    {
        echo "$valor<br/>";
    }
*/
    // count = conta quantos valores tem dentro do vetor
    // estrutura for(variavel de controle; condição de repetição; incremento ou decremento)
    //for($x = 0; $x < count($vetor))
// enviando dados do html pro vetor
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vetor</h1>
    <form action="#" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" name="vetor[]"/>
        <br/><br/>
        <label for="idade">Idade:</label>
        <input type="text" name="vetor[]"/>
        <br/><br/>
        <label for="peso">Peso:</label>
        <input type="text" name="vetor[]"/>
        <br/><br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>