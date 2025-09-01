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
        <h1>O que celebramos no Dia da Independência?</h1>
        <form method="post" method="post" >
            <h2>Selecione sua resposta</h2>
    </div>
    <div class="ola">
        <label for="reposta6"></label>
        <input type="radio" name="resposta6" value="1"> As conquista da etnia negra
        <br><br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value="2"> Que começou a primavera
        <br><br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value="3"> Que o Brasil ficou independente
        <br><br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value="4"> Que ganhamos presentes

        <br>
        <input type="submit" value="enviar" id="btn" class="botao">

        </form>
    </div>
</body>

</html>


<?php


session_start();


require_once 'Geral.php';

$geral = new Geral();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta6 = $_POST['resposta6'];

    $geral->Desafio6($resposta6);
}



?>