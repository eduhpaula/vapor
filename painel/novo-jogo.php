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
        <div id="formulario-novoidioma">

            <form action="cadastrar-idioma.php" method="post" id="form-novoidioma">
                <div class="campos2">
                    <h3>Nome:*</h3>
                    <input type="text" name="nome" class="campo1" required>
                    <br>
                    <h3>Valor:*</h3>
                    <input type="number" min="0.00" name="valor" class="campo1" required>
                    <br>
                    <h3>Imagem:*</h3>
                    <input type="url" name="imagem_url" class="campo1" required>
                    <br>
                    <h3>Video:</h3>
                    <input type="url" name="video_url" class="campo1">
                    <br>
                    </div>
                <div class="campos3">
                    <h3>Lançamento:*</h3>
                    <input type="date" name="data" class="campo1" required>
                    <br>
                    <h3>Desenvolvedora:*</h3>
                    <input type="text" name="desenvolvedor" class="campo1">
                    <br>
                    <h3>Categoria:*</h3>
                    <select name="categoria" class="campo1" required>
                    <option value="" disabled selected>Selecione</option>
                    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                    <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>
                    <br>
                </div>
                <div class="campos4">
                    <h3>Descrição:*</h3>
                    <textarea class="campo1" required name="descricao" cols="30" rows="10"></textarea>
                </div>
                 
                <div id="btm-novojogo">
                <button class="btm-jogo" type="submit">Salvar</button>
                </div>
            </form>

            <?php if ($error != null) { ?>
                <div class="error-novoidioma"><?=$error?></div>
            <?php } ?>

        </div>    
    </div>
</body>
</html>