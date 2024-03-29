<?php
if($_GET)
{
    $matriz = array(
                    array("nome"=>"Heryson","idade"=>24,"peso"=>777),
                    array("nome"=>"Wilson","idade"=>24,"peso"=>888),
                    array("nome"=>"Orlando","idade"=>24,"peso"=>999));

    $matriz = array(
                    "linha1"=>array("nome"=>"Heryson","idade"=>24,"peso"=>777),
                    "linha2"=>array("nome"=>"Wilson","idade"=>24,"peso"=>888),
                    "linha3"=>array("nome"=>"Orlando","idade"=>24,"peso"=>999));
    

    echo "<pre>";
    var_dump($matriz);
    echo "<pre>";

    foreach($matriz as $ind=>$vetor)
    {
        foreach($vetor as $indice=>$valor) "$indice: $valor<br/>";
    }
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