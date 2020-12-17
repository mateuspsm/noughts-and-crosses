<?php
//Incluindo o cabeçalho.
require 'cabecalho.php';

//Array de 9 posições para guardar a os valores do jogo.
$_SESSION['jogadas'] = ["","","","","","","","",""];

//Simbolos do jogo.
$_SESSION['simbolo'] = "X";

//Ordem dos jogadores.
$_SESSION['jogadores'] = [0,1];

//Sequencias possiveis de vitória.
$_SESSION['win'] = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6],
];

//Inicializando a sessão controlara e quantidade de visitas.
$_SESSION['visitas'] = 1 ;?>
<h1>Jogo da Velha</h1>

<figure>
    <img src="img/google-jogo-da-velha.png" alt="">
    <figcaption>Jogo da Velha</figcaption>
</figure>

<h2>Deseja jogar?</h2>
<form action="velha.php" class="jogo-velha">
    <h3>Quem começa: </h3>
    <label for=""><input type="radio" name="opcao" value="0"> Máquina</label> 
    <label for=""><input type="radio" name="opcao" value="1"> Você</label> 
    <button>Enviar</button>
</form>

<?php
//Rodapé.
require 'rodape.php';