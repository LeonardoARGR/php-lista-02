<?php
    $nome = $_POST["nome"];
    $opcao = ["Pedra", "Papel", "Tesoura"];
    $jogador = $_POST["escolha"];
    $computador = rand(0, 2);

    if($jogador - $computador == -2 || $jogador - $computador == 1){
        echo "<h1 style='text-align: center'>Parabéns ".$nome.", você ganhou!</h1>";
    }elseif($jogador == $computador){
        echo "<h1 style='text-align: center'>Empate!</h1>";
    }else{
        echo "<h1 style='text-align: center'>".$nome.", você perdeu! Tente novamente</h1>";
    }

    echo "<div style='display: flex, justify-content: center'>";

    echo "<div>";
    echo "<h2 style='text-align: center'>". $nome.": " . $opcao[$jogador] . "</h2>";
    echo "<center><img src = 'src/".$opcao[$jogador].".png'/></center>";
    echo "</div>";
    echo "<div>";
    echo "<h2 style='text-align: center'>Computador: " . $opcao[$computador] . "</h2>";
    echo "<center><img src = 'src/".$opcao[$computador].".png'/></center>";
    echo "</div>";

    echo "</div>";
    
?>