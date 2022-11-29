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
    <title>Painel de Controle - Novo Jogo</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="jogo.php" class="btm-novoidioma">Voltar</a>
        <form action="cadastrar-jogo.php" method="post">
        <div class="row">

            <div class="input-container quarter">
                <label for="name">Nome*</label>
                <input required name="name" id="name" class="row-input" type="text">
            </div>

            <div class="input-container quarter">
                <label for="price">Valor*</label>
                <input required name="price" id="price" class="row-input" type="number" min="0.00">
            </div>

            <div class="input-container quarter">
                <label for="image_url">Imagem*</label>
                <input required name="image_url" id="image_url" class="row-input" type="url">
            </div>

            <div class="input-container quarter">
                <label for="video_url">Video</label>
                <input name="video_url" id="video_url" class="row-input" type="url" min="0">
            </div>

        </div>

        <div class="row">

            <div class="input-container quarter">
                <label for="release_date">Lançamento*</label>
                <input required name="release_date" id="release_date" class="row-input" type="date">
            </div>

            <div class="input-container quarter">
                <label for="developer">Desenvolvedora*</label>
                <input required name="developer" id="developer" class="row-input" type="text">
            </div>

            <div class="input-container quarter">
                <label for="category">Categoria*</label>
                <select name="category" id="category" required>
                    <option value="" disabled selected>Selecione</option>

                    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>

                </select>
            </div>


        </div>

        <div class="row">
            <div class="input-container full">
                <label for="description">Descrição*</label>
                <textarea required name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>                    



        <?php if ($error != null) { ?>
            <div class="row error-message"><?= $error ?></div>
        <?php } ?>

        <div class="row row-button">
            <button class="button-default" type="submit">Salvar</button>
        </div>
    </form>
    
</div>