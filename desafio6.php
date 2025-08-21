<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O que celebramos no Dia da Independência?</h1>
    <form method="post">
        <h2>Selecione sua resposta</h2>
        <label for="reposta6"></label>
        <input type="radio" name="resposta6" value = "1"> As conquista da etnia negra 
        <br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value = "2" > Que começou a primavera
<br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value = "3"> Que o Brasil ficou independente
<br>
        <label for="resposta6"></label>
        <input type="radio" name="resposta6" value = "4"> Que ganhamos presentes
        
        <br>
        <input type="submit" value="enviar"id="btn" onclick="clicar()">

    </form>
</body>
</html>
<script>
   
   function clicar(){
    const btn = document.getElementById('btn')
    window.alert('✅ FINALIZADO!!')
   }
</script>

<?php

require_once 'Geral.php';

$geral = new Geral(); 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resposta6 = $_POST['resposta6'];
  
    $geral->Desafio6($resposta6);
}



?>