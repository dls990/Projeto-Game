<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
      background: linear-gradient(#24a4bc, #8bd3ec);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      overflow-x: hidden;
    }

    .container{
        background-color: bisque;
        padding: 100px;
        border-radius: 15px;
        box-shadow: 15px 15px #24a4bc;
        
    }

    h1{
        font-family: 'Gill Sans', sans-serif;
      font-size: 36px;
      margin-bottom: 10px;
    }
    .botao {
      display: inline-block;
      margin-top: 40px;
      padding: 15px;
      background: aliceblue;
      border-radius: 15px;
      box-shadow: 5px 5px #24a4bc;
      text-decoration: none;
      color: black;
      font-size: 1.2rem;
      transition: all .2s ease-in-out;
      margin-right: 20px;
    }

    .btn{
        display: flex;
        justify-content: center;
        align-items: end;
        position: absolute;
        margin-top: 18px;
        transform: translate(-8vh, 3vh);
        background: aliceblue;
        padding: 10px;
        border-radius: 15px;
        box-shadow: 5px 5px #24a4bc;
        text-decoration: none;
        color: black;
        font-size: 1.2rem; 
        margin-right: 20px;
        transition: all .2s ease-in-out;
    }

    .btn:hover{
        background: #24a4bc;
        
    }

    .botao:hover {
      background: aliceblue;
      transform: scale(1.05);
    }
</style>
<body>
    <div class="container">
    <h1>Escolha qual matéria começar</h1>

   <a href="desafio1.php" class = "botao">Matemática</a>
   <a href="desafio3.php" class = "botao">Português</a>
   <a href="desafio5.php" class = "botao">História</a>

    <a href="index.php" class = "btn">Voltar</a></div>
</body>
</html>