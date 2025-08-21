<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gênio Quizz</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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

    h1 {
      font-family: 'Gill Sans', sans-serif;
      font-size: 6vw;
      margin-bottom: 10px;
    }

    h2 {
      font-family: Impact, sans-serif;
      font-size: 10vw;
      color: bisque;
    }

    .header{
      animation: transition 1s infinite alternate;
    }

    @keyframes transition {
      from { transform: translateX(100px); }
      to   { transform: translateX(0); }
    }

    img {
      max-width: 80%;
      height: auto;
      margin-bottom: 20px;
    }

    .botao {
      display: inline-block;
      margin-top: 40px;
      padding: 15px 30px;
      background: bisque;
      border-radius: 15px;
      box-shadow: 5px 5px aliceblue;
      text-decoration: none;
      color: black;
      font-size: 1.2rem;
      transition: all .2s ease-in-out;
    }

    .botao:hover {
      background: aliceblue;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <img src="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" alt="Logo do Gênio Quizz" width="300px" height="100px">
  <h1>Seja bem-vindo ao</h1>
  <div class="header">
    <h2>Gênio Quizz</h2>
  </div>
  <a href="materia.php" class="botao">Começar</a>
</body>
</html>
