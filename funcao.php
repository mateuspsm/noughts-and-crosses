<?php

function mudaSimbolo($visitas){
    if ($visitas%2==0) {
        $_SESSION['simbolo'] = "X";
    }else{
        $_SESSION['simbolo'] = "O";
    }
}

function comeca($op){
    if($op){
        mudaJogador($_SESSION['jogadores'] = [0=>"Maquina", 1=>"Jogador"]);
    }else{
        mudaJogador($_SESSION['jogadores'] = [0=>"Jogador", 1=>"Maquina"]);
    }
}

function mudaJogador($visita){
    if($visita%2==0){?>
        <h1><?= $_SESSION['jogadores'][0] ?></h1>
    <?php }else{ ?>
        <h1><?= $_SESSION['jogadores'][1] ?></h1>
    <?php }
}

function insereJogada($indice){
    if ($_SESSION['jogadas'][$indice] == "") {
        $_SESSION['jogadas'][$indice] = $_SESSION['simbolo'];
    }else {
        echo "Celula já preenchida!";
        echo "<br />Por favor digitar novamente!";
        header("Refresh: 3; url=velha.php");
    }
}

function verificaFim(){
    $contador = 0;
    foreach ($_SESSION['win'] as $key => $value) {
        foreach ($value as $k => $v) {

            if ($_SESSION['jogadas'][$v] == $_SESSION['simbolo']) {
                $contador++;
                if($contador == 3){
                    echo "Fim de jogo!";
                    break 2;
                }
            }else{
                $contador = 0;
                break;
            }
        }
        echo "<br />";
    }
    return $contador;
}