<?php
    $num = $_POST['num'];
    if($num > 0){
        echo "<h1 style='text-align: center'>Valor Positivo</h1>";
    }elseif($num < 0){
        echo "<h1 style='text-align: center'>Valor Negativo</h1>";
    }else{
        echo "<h1 style='text-align: center'>Igual a Zero</h1>";
    }
?>
