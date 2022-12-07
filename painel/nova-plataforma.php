<?php
    $error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <title>Painel de Controle - Nova Plataforma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
    </div>
    <div id="conteudo-dash">
    <a href="plataforma.php" class="btm-novoidioma">Voltar</a>
        <div id="formulario-novoidioma">

            <form action="cadastrar-plataforma.php" method="post" id="form-novoidioma">
                <h3>Cadastrar Nova Plataforma:</h3>
                <input onfocus="removerElementoPorId('error-novaplataforma-js')" onkeyup="primeira_letra_maiuscula(this)" type="text" name="plataforma" placeholder="Nova Plataforma" class="campo" required>
                <br>
                <button class="btm-formnovoidioma" type="submit">Salvar</button>
                
                <?php if ($error != null) { ?>
                <div id="error-novaplataforma-js" class="error-novoidioma"><?=$error?></div>
                <?php } ?>
            </form>

        </div>    
    </div>
</body>
</html>