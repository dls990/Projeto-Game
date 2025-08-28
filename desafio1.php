<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gênio Quizz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" type="image/x-icon">
</head>

<body>
    <div class="sein">
        <h1>João tem o dobro da idade de Ana. Daqui a 6 anos, a soma das idades dos dois será 54 anos. Qual é a idade de
            cada um hoje?</h1><br><br>
        <form method="post">
            <h2>Selecione a idade</h2>
    </div>
    <div class="ola">
        <label for="idadeJoao"></label>
        <input type="radio" name="idade" value="1">14 anos e 28 anos
        <br><br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value="2">27 anos e 27 anos
        <br><br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value="3">18 anos e 24 anos
        <br><br>
        <label for="idadeAna"></label>
        <input type="radio" name="idade" value="4">23 anos e 10 anos

        <br>
        <input type="submit" value="enviar" class="botao">
        </form>
    </div>
</body>

</html>

<?php
session_start();

require_once 'Geral.php';

$geral = new Geral();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idade = $_POST['idade'];

    $geral->Desafio1($idade);
}



?>