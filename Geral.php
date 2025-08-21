<?php

class Geral{
    public function Desafio1($idade){
        //ana tem 14
        //joao tem 28
         if ($idade === "1") {
         header("Location: desafio2.php");
        exit;
    } else {
        echo "<p style='color:red;'>❌ Resposta errada!</p>";
    }
        
    }


    public function Desafio2($resposta){
        if ($resposta === "4") {
            header("Location: materia.php");
            exit;
        }else {
                echo "<p style='color:red;'>❌ Resposta errada!</p>";# code...
            }}

             public function Desafio3($resposta3){
        if ($resposta3 === "2") {
            header("Location: desafio4.php");
            exit;
        }else {
                echo "<p style='color:red;'>❌ Resposta errada!</p>";# code...
            }
        }
            public function Desafio4($resposta4){
        if ($resposta4 === "2") {
            header("Location: materia.php");
            exit;
        }else {
                echo "<p style='color:red;'>❌ Resposta errada!</p>";# code...
            }
    

}    public function Desafio5($resposta5){
        if ($resposta5 === "2") {
            header("Location: desafio6.php");
            exit;
        }else {
                echo "<p style='color:red;'>❌ Resposta errada!</p>";# code...
            }
    
}

    public function Desafio6($resposta6){
        if ($resposta6 === "3") {
            header("Location: materia.php");
            exit;
        }else {
                echo "<p style='color:red;'>❌ Resposta errada!</p>";# code...
            }
    
}





}






?>