<?php
session_start();


function exibirPontuacao() {
    echo "<h2>Sua pontuação é: " . $_SESSION['total_pontos'] . " pontos!</h2>";
}

exibirPontuacao();
?>
