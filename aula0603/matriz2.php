<?php
/*
// MATRIZ com mais de uma dimensão
    $matriz = array(array("Maria",12,57.2),
                   array("Paulo",15,53.5),
                   array("Pedro",13,52.7));
    
    echo "<pre>";
    var_dump($matriz);
    echo "<pre>";

    foreach($matriz as $vetor)
    {
        foreach($vetor as $valor)
        {
            echo "$valor<br/>";
        }
    }

    for($linha = 0; $linha <3 ; $linha++)
    {
        for($coluna = 0; $coluna <3; $coluna++)
        {
            echo "{$matriz[$linha][$coluna]}<br/>";
            // echo $matriz[$linha][$coluna]."<br/>";
        }
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
/*    
    for($x = 0; $x < 3; $x++)
    {
        echo "$vetor[$x]<br/>";
    }
*/
// enviando dados do html pro vetor
if($_GET)
{
    $matriz = $_GET["matriz"];

    echo "<pre>";
    var_dump($matriz);
    echo "<pre>";
}
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
<table border="1">
    <thead>
        <tr>
            <th>Nome:</th>
            <th>Idade:</th>
            <th>Peso:</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="matriz[0][0]"></td>
                <td><input type="text" name="matriz[0][1]"></td>
                <td><input type="text" name="matriz[0][2]"></td>
            </tr>
            <tr>
                <td><input type="text" name="matriz[1][0]"></td>
                <td><input type="text" name="matriz[1][1]"></td>
                <td><input type="text" name="matriz[1][2]"></td>
            </tr>
            <tr>
                <td><input type="text" name="matriz[2][0]"></td>
                <td><input type="text" name="matriz[2][1]"></td>
                <td><input type="text" name="matriz[2][2]"></td>
            </tr>
        </tbody>
    </table>
            <input type="submit" value="Enviar"/>
    </form>
</body>
</html>