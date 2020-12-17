<?php 
session_start(); 
require 'funcao.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- CABEÇALHO DO DOCUMENTO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Jogo da Velha</title>
</head>

<body>

    <!-- CABEÇALHO DA CONTEUDO -->
    <header id="cabecalho" class="">
        <!-- LOGOTIPO -->
        <div id="logo"><img src="img/logo.png" alt="logo"></div>

        <!-- MENU DE NAVEGAÇÃO -->
        <nav id="menu">
            <ul class="bg-dark-blue">
                <li><a href="index.php" class="item-menu">Inicio</a></li>
                <li><a href="sobre.php" class="item-menu">Sobre</a></li>
                <li><a href="jogo.php" class="item-menu">Jogo da Velha</a></li>
            </ul>
        </nav>
    </header>