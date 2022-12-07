<?php require("./modulos/conexao.php"); ?>
<?php require('./modulos/autenticacao.php');?> 

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <script src="./assets/scripts.js"></script>
</head>

<div id="topdash">
            <h3 id="corh3">Dashboard</h3>
            <h4 id="corh4">Olá, <?=$administrador['nome']?> - <span id="clock"></span></h4>
            
</div>

<script>
    updateClock()
    iniciar_mudanca_de_cor()
</script>

