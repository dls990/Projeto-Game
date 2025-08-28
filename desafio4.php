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
        <h1>Complete a frase: “O sol está ___ no céu.”</h1>
        <form method="post">
            <h2>Selecione a resposta correta</h2>
    </div>
    <div class="ola">
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value="1"> Correndo
        <br><br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value="2"> Brilhando
        <br><br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value="3"> Alegre
        <br><br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value="4"> Bonito

        <br>
        <input type="submit" value="enviar" id="btn" class="botao">
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

    $resposta4 = $_POST['resposta4'];

    $geral->Desafio4($resposta4);
}



?>