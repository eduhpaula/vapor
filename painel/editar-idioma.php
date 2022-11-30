<?php
    require("./modulos/conexao.php");
    $error = $_GET['error'] ?? null;
    $id_idioma = $_GET['id'] ?? null;

    $consultar_idioma = "SELECT nome FROM idioma WHERE id = '{$id_idioma}'";
    $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <title>Painel de Controle - Editar Idioma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="idioma.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="atualizar-idioma.php" method="post" id="form-novoidioma">
                <h3>Editar idioma:</h3>
                <input value="<?=$idioma['nome']?>" type="text" name="idioma" placeholder="Atualizar Idioma" class="campo" required>
                <input value="<?=$id_idioma?>" name="id" type="hidden">
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