<?php require 'cabecalho.php';

?><div class="info">
<?php 
if ($_SESSION['jogadas'][$_GET['celula']] == "") {
    insereJogada($_GET['celula']);
    if(verificaFim() == 3){
        //jogador($_SESSION['visitas']);
        mudaJogador($_SESSION['visitas']);
        echo " Ganhou!!!";
        $_SESSION['visitas'] = 1;
        header("Refresh: 3; url=jogo.php");
    }else{
        $_SESSION['visitas'] += 1;
        header("Refresh: 1; url=velha.php");
    }

    if($_SESSION['visitas'] == 9){
        echo "Empate!!!";
    }
}else {
    echo "Celula já preenchida!";
    echo "<br />Por favor digitar novamente!";
    header("Refresh: 3; url=velha.php");
}
?>
</div>
