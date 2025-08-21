<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Qual das respostas o verbo está no passado ?</h1>
 <form method="post">
        <h2>Selecione a resposta correta</h2>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value = "1"> eu comi um baguete
        <br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value = "2"> eu comerei um baguete 
<br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value = "3"> eu como um baguete
<br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value = "4"> eu comu um baguete
        
        <br>
        <input type="submit" value="enviar">
    </form>
</h2>
</body>
</html>


<?php

require_once 'Geral.php';

$geral = new Geral(); 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta3 = $_POST['resposta3'];
  
    $geral->Desafio3($resposta3);
}



?>