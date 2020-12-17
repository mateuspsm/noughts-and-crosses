<?php require "cabecalho.php";

if($_GET['opcao']=="Maquina"){
    $_SESSION['jogador1'] = "Maquina";
    $_SESSION['jogador2'] = "Voce";
}elseif($_GET['opcao']=="Voce"){
    $_SESSION['jogador1'] = "Voce";
    $_SESSION['jogador2'] = "Maquina";
}

header("Refresh: 1; url=velha.php");