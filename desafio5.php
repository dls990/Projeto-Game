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
        <h1>Qual a cor do cavalo branco de Napoleão ?</h1>
        <form method="post">
            <h2>Selecione sua resposta</h2>
    </div>
    <div class="ola">
        <label for="reposta5"></label>
        <input type="radio" name="resposta5" value="1"> Vermelho
        <br><br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value="2"> Branco
        <br><br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value="3"> Arco-íris
        <br><br>
        <label for="resposta5"></label>
        <input type="radio" name="resposta5" value="4"> Preto

        <br>
        <input type="submit" value="enviar" class="botao">
        </form>
    </div>
</body>

</html>

<?php

require_once 'Geral.php';

$geral = new Geral();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta5 = $_POST['resposta5'];

    $geral->Desafio5($resposta5);
}



?>