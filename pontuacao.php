<?php

session_start();


if (isset($_GET['reset']) && $_GET['reset'] == '1') {
    for ($i = 1; $i <= 6; $i++) {
        $_SESSION["desafio$i"] = 0;
    }
    $_SESSION['total_pontos'] = 0;
}


for ($i = 1; $i <= 6; $i++) {
    if (!isset($_SESSION["desafio$i"])) {
        $_SESSION["desafio$i"] = 0; 
    }
}


$total = 0;
for ($i = 1; $i <= 6; $i++) {
    if (isset($_SESSION["desafio$i"]) && is_numeric($_SESSION["desafio$i"])) {
        $total += $_SESSION["desafio$i"];
    }
}
$_SESSION['total_pontos'] = $total;


echo "<h2>Sua pontuação é: $total pontos!</h2>";


?>





