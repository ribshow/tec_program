<?php
     if($_GET)
     {
        if(empty($_GET["txt_nome"]))
        {
          echo "Preencha o nome";
        }
        if(empty($_GET["email"]))
        {
            echo "Preencha o email";
        }
        if(empty($_GET["profissao"] == "pattern"))
        {
            echo "Escolha uma profissão</br>";
        }
        if(!isset($_GET["genero"]))
        {
            echo "Escolha um gênero</br>";
        }
        if(!isset($_GET["lazer1"]) &&
           !isset($_GET["lazer2"]) &&
           !isset($_GET["lazer3"]) &&
           !isset($_GET["lazer4"]))
           {
               echo "Marque pelo menos um lazer";
           }
     }    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM AULA 2</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="#" method="GET">
        <label class="name">
            Nome:<input type="text" name="txt_nome" placeholder="Ana Maria" required></br>
        </label>
</br>
        <label class="email">
            Email:<input type="text" name="email" placeholder="..@fatec.sp.gov.br" required></br>
        </label>
</br>
        <label class="data">
            Data de Nascimento: <input type="date" name="data" placeholder="09/03/1951" required></br>
        </label>
</br>
            <label>Profissão:</label>
            <select name="profissao">
                <option value="pattern">...</option>
                <option value="Web designer">Web designer</option>
                <option value="Front-end developer">Front-end developer</option>
                <option value="Back-end developer">Back-end developer</option>
            </select></br>
</br>
        <label class="genero">
            Gênero:<input type="radio" name="beantype" value="feminino"/>Feminino
                   <input type="radio" name="beantype" value="masculino" />Masculuno</br>
        </label>
</br>
        <label class="lazer">
            Lazer:</br>
                  <input type="checkbox" name="lazer1" value="play"/><label for="lazer1">Jogar</label></br>
                  <input type="checkbox" name="lazer2" value="read"/>Ler</br>
                  <input type="checkbox" name="lazer3" value="listening"/>Ouvir música</br>
                  <input type="checkbox" name="lazer4" value="others"/>Outros</br>
                  Se outros, o que?
                  <textarea name="mensagem" rows="1" cols="20"></textarea></br>
        </label>
        <label class="obs">
            Observação:</br>
            <textarea name="obs_text" rows="5" cols="50>"></textarea></br>
        </label>
        <label class="botao">
            <button class="botao-enviar" type="submit">Enviar</button>
        </label>
    </form>
</body>
</html>