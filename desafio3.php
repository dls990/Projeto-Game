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
        <h1>Qual das respostas o verbo está no passado ?</h1>
        <form method="post" method="post">
            <h2>Selecione a resposta correta</h2>
    </div>
    <div class="ola">
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value="2"> eu comi um baguete
        <br><br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value="1"> eu comerei um baguete
        <br><br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value="3"> eu como um baguete
        <br><br>
        <label for="resposta3"></label>
        <input type="radio" name="resposta3" value="4"> eu comu um baguete

        <br>
        <input type="submit" value="enviar" class="botao">
        </form>
    </div>
    </h2>
</body>

</html>


<?php
session_start();

require_once 'Geral.php';

$geral = new Geral();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta3 = $_POST['resposta3'];

    $geral->Desafio3($resposta3);
}



?>