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
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
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