<?php




class Geral {

    public function Desafio1($idade) {
        
        if ($idade === "1") {
            $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0);

            echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p>";
            echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] + 10 . "</p>" . '<br>';
            echo "<a href='desafio2.php'>Próximo desafio</a>";
        } else {
            echo "<p style='color:red;'>❌ Resposta errada!</p>" . '<br>';
            echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>" . '<br>';
            echo "<a href='desafio2.php'>Próximo desafio</a>" . '<br>'; 
        }
    }



    public function Desafio2($resposta) {
    if ($resposta === "4") {
        $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0) + 10;

        echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] . "</p>";
        echo "<a href='desafio3.php'>Próximo desafio</a>";
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>";
        echo "<a href='desafio3.php'>Próximo desafio</a>";
    }
}

             public function Desafio3($resposta3){
        if ($resposta3 === "2") {
            $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0) + 10;

        echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] . "</p>";
        echo "<a href='desafio4.php'>Próximo desafio</a>";
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>";
        echo "<a href='desafio4.php'>Próximo desafio</a>";
    }
        }
            public function Desafio4($resposta4){
        if ($resposta4 === "2") {
             $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0) + 10;

        echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] . "</p>";
        echo "<a href='desafio5.php'>Próximo desafio</a>";
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>";
        echo "<a href='desafio5.php'>Próximo desafio</a>";
    }
    

}
    public function Desafio5($resposta5){
        if ($resposta5 === "2") {
             $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0) + 10;

        echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] . "</p>";
        echo "<a href='desafio6.php'>Próximo desafio</a>";
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>";
        echo "<a href='desafio6.php'>Próximo desafio</a>";
    }
    
}

    public function Desafio6($resposta6){
        if ($resposta6 === "3") {
            $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 0) + 10;

        echo "<p style='color:green;'>✅ Resposta correta! +10 pontos</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . $_SESSION['pontos'] . "</p>";
        echo "<a href='final.php'>Próximo desafio</a>";
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p><br>";
        echo "<p><strong>Pontuação atual:</strong> " . ($_SESSION['pontos'] ?? 0) . "</p>";
        echo "<a href='final.php'>Próximo desafio</a>";
    }
    
}
}



?>