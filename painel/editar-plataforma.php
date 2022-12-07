<?php
    require("./modulos/conexao.php");
    $error = $_GET['error'] ?? null;
    $id_plataforma = $_GET['id'] ?? null;

    $consultar_plataforma = "SELECT nome FROM plataforma WHERE id = '{$id_plataforma}'";
    $plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <title>Painel de Controle - Editar Plataforma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="plataforma.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="atualizar-plataforma.php" method="post" id="form-novoidioma">
                <h3>Editar plataforma:</h3>
                <input value="<?=$plataforma['nome']?>" onkeyup="primeira_letra_maiuscula(this)" type="text" name="plataforma" placeholder="Atualizar Plataforma" class="campo" required>
                <input value="<?=$id_plataforma?>" name="id" type="hidden">
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