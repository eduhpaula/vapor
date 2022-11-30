<?php
    $error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
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