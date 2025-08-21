<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Complete a frase: “O sol está ___ no céu.”</h1>
 <form method="post">
        <h2>Selecione a resposta correta</h2>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value = "1"> Correndo
        <br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value = "2"> Brilhando
<br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value = "3"> Alegre
<br>
        <label for="resposta4"></label>
        <input type="radio" name="resposta4" value = "4"> Bonito
        
        <br>
        <input type="submit" value="enviar" id="btn" onclick="clicar()">
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

    $resposta4 = $_POST['resposta4'];
  
    $geral->Desafio4($resposta4);
}



?>