<?php
    $lados = [$_POST['numA'], $_POST['numB'], $_POST['numC']];
    sort($lados);
    if($lados[0] + $lados[1] > $lados[2]){
        if($lados[0] == $lados[2]){
            echo "<h1 style='text-align: center'>Triângulo Equilátero</h1>";
            echo "<center><img src = 'src/equilatero.png'/></center>";
        }elseif($lados[0] == $lados[1] || $lados[1] == $lados[2]){
            echo "<h1 style='text-align: center'>Triângulo Isósceles</h1>";
            echo "<center><img src = 'src/isosceles.png'/></center>";
        }else{
            echo "<h1 style='text-align: center'>Triângulo Escaleno</h1>";
            echo "<center><img src = 'src/escaleno.png'/></center>";
        }
    }else{
        echo "<h1 style='text-align: center'>As medidas informadas não formam um triângulo</h1>";
    }

?>