<?php require("conexao.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Vapor - <?php echo $titulo_pagina; ?></title>
    <div id="header-container">
        <div id="header">
            <div id="logo" title="Vapor Logo">
                <a href="index.php">
                    <img src="./public/images/logo.png" alt="Logo Vapor">
                </a>
            </div>

            <div id="menu">
                <div class="item" title="LOJA">
                    <a href="index.php">LOJA</a>
                </div>

                <div class="item" title="SOBRE">
                    <a href="sobre.php">SOBRE</a>
                </div>

                <div class="item" title="SUPORTE">
                    <a href="suporte.php">SUPORTE</a>
                </div>

            </div>
        </div>
    </div>
</head>