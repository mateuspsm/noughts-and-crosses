<?php 
require "cabecalho.php";
mudaSimbolo($_SESSION['visitas']);

if ($_SESSION['visitas'] == 1) {
    comeca($_GET['opcao']);
    echo $_SESSION['visitas'];
} else {
    mudaJogador($_SESSION['visitas']);
}
echo "está jogando...";
?>

<form action="verifica.php" class="jogo-velha">
    <div class="container">
        <?php
            for($i = 0; $i < count($_SESSION['jogadas']); $i++){?>
        <label>
            <div class='velha'>
                <input type="radio" name="celula" value="<?= $i ?>">
                <p><?php echo $_SESSION['jogadas'][$i]?></p>
            </div>
        </label>

        <?php }
        ?>
    </div>
    <button>Enviar</button>
</form>
<?php 