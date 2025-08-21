

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>João tem o dobro da idade de Ana. Daqui a 6 anos, a soma das idades dos dois será 54 anos. Qual é a idade de cada um hoje?</h1>
    <form method="post">
        <h2>Selecione a idade</h2>
        <label for="idadeJoao"></label>
        <input type="radio" name="idade" value = "1">14 anos e 28 anos
        <br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value = "2">27 anos e 27 anos
<br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value = "3">18 anos e 24 anos
<br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value = "4">23 anos e 10 anos
        
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php

require_once 'Geral.php';

$geral = new Geral(); 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idade = $_POST['idade'];
  
    $geral->Desafio1($idade);
}



?>