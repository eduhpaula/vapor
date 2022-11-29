<?php
    require("./modulos/conexao.php");
    $error = $_GET['error'] ?? null;
    $id_categoria = $_GET['id'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));

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
    <title>Painel de Controle - Editar Categoria</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="categoria.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="atualizar-categoria.php" method="post" id="form-novoidioma">
                <h3>Editar Categoria:</h3>
                <input value="<?=$categoria['nome']?>" type="text" name="categoria" placeholder="Atualizar Categoria" class="campo" required>
                <input value="<?=$id_categoria?>" name="id" type="hidden">
                <br>
                <button class="btm-formnovoidioma" type="submit">Atualizar</button>

                <?php if ($error != null) { ?>
                <div class="error-novoidioma"><?=$error?></div>
                <?php } ?>
            </form>

        </div>    
    </div>
</body>
</html>