<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Qual a cor do cavalo branco de Napoleão ?</h1>
    <form method="post">
        <h2>Selecione sua resposta</h2>
        <label for="reposta5"></label>
        <input type="radio" name="resposta5" value = "1"> Vermelho
        <br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value = "2"> Branco
<br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value = "3"> Arco-íris
<br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value = "4"> Preto
        
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php

require_once 'Geral.php';

$geral = new Geral(); 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta5 = $_POST['resposta5'];
  
    $geral->Desafio5($resposta5);
}



?>