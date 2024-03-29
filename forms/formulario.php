<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM AULA 1</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="" method="POST">
        <label class="name">
            Nome:<input type="text" name="txt_nome" placeholder="Ana Maria" required>
        </label>
        <label class="email">
            Email:<input type="text" name="email" placeholder="..@fatec.sp.gov.br" required>
        </label>
        <label class="botao">
            <button class="botao-enviar" type="submit">Enviar</button>
        </label>
    </form>
</body>
</html>
<?php
    /*if($_GET)
    {
        echo $_GET["txt_nome"];
        echo $_GET["email"];
    }*/
    if($_POST)
    {
        echo "<h2 style='color:blue'>{$_POST['txt_nome']}</h2><br>";
        echo $_POST["email"];
        echo "<script>alert('Formulario enviado')</script>";
        //recurso de programador
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

    }
?>