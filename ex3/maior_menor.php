<?php
    $a = $_POST['numA'];
    $b = $_POST['numB'];

    if($a > $b){
        echo "<h1 style='text-align: center'>A maior que B</h1>";
    }elseif($a < $b){
        echo "<h1 style='text-align: center'>A menor que B</h1>";
    }else{
        echo "<h1 style='text-align: center'>A igual a B</h1>";
    }
?>