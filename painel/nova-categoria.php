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
    <title>Painel de Controle - Nova Categoria</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="categoria.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="cadastrar-categoria.php" method="post" id="form-novoidioma">
                <h3>Cadastrar Nova Categoria:</h3>
                <input type="text" name="categoria" placeholder="Nova Categoria" class="campo" required>
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