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
        <h1>Pedro pensou em um número. Dobrou esse número e somou 10. O resultado foi 34. Qual era o número que ele
            pensou?</h1>
        <form method="post">
            <h2>Selecione a idade</h2>
    </div>
    <div class="ola">
        <label for="resposta"></label>
        <input type="radio" name="resposta" value="1"> 24
        <br><br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value="2"> 34
        <br><br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value="3"> 13
        <br><br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value="4"> 12

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

    $resposta = $_POST['resposta'];

    $geral->Desafio2($resposta);
}



?>