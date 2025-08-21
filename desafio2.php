<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pedro pensou em um número. Dobrou esse número e somou 10. O resultado foi 34. Qual era o número que ele pensou?</h1>
 <form method="post">
        <h2>Selecione a idade</h2>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value = "1"> 24
        <br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value = "2"> 34
<br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value = "3"> 13
<br>
        <label for="resposta"></label>
        <input type="radio" name="resposta" value = "4"> 12
        
        <br>
        <input type="submit" value="enviar" id ="btn" onclick="clicar()">
    </form>
</h2>
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

    $resposta = $_POST['resposta'];
  
    $geral->Desafio2($resposta);
}



?>