<?php
    $error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Painel de Controle - Novo Idioma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="idioma.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="cadastrar-idioma.php" method="post" id="form-novoidioma">
                <h3>Cadastrar Novo Idioma:</h3>
                <input type="text" name="idioma" placeholder="Novo Idioma" class="campo" required>
                <br>
                <button class="btm-formnovoidioma" type="submit">Salvar</button>

                <?php if ($error != null) { ?>
                <div class="error-novoidioma"><?=$error?></div>
                <?php } ?>
            </form>

        </div>    
    </div>
</body>
</html>