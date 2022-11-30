<?php
    $error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                <input onfocus="removeErrorMessageCategoria()" type="text" name="categoria" placeholder="Nova Categoria" class="campo" required>
                <br>
                <button class="btm-formnovoidioma" type="submit">Salvar</button>

                <?php if ($error != null) { ?>
                <div id="error-novacategoria-js" class="error-novoidioma"><?=$error?></div>
                <?php } ?>
            </form>

        </div>    
    </div>
</body>
</html>