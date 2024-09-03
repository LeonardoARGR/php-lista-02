<?php
    $num = $_POST['num'];
    if($num % 2 == 0){
        echo "<h1 style='text-align: center'>Par</h1>";
    }else{
        echo "<h1 style='text-align: center'>Ímpar</h1>";
    } 
?>