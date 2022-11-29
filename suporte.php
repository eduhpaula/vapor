<?php 
    $titulo_pagina = "Suporte";
    $enviado = $_GET['enviado'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <div id="formulario">
                <form action="suporte_enviar.php" method="post" autocomplete="off">
                    <label for="nome" class="legenda">Nome:* </label><br>
                    <input type="text" class="campo" name="nome" required>
                    <br>
                    <label for="e-mail" class="legenda">E-mail:* </label><br>
                    <input type="email" class="campo" name="email" required>
                    <br>
                    <label for="assunto" class="legenda">Assunto:* </label><br>
                    <select name="assunto" class="camposelect" required>
                        <option value="">Selecione</option>
                        <option value="Dúvidas">Dúvidas</option>
                        <option value="Críticas">Críticas</option>
                        <option value="Elogios">Elogios</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Suporte">Suporte</option>
                        <option value="Outros">Outros</option>
                    </select>
                    <br>
                    <label for="mensagem" class="legenda">Mensagem:* </label><br>
                    <textarea name="mensagem" class="mensagem" required></textarea>
                    <br>
                    <input type="submit" class="enviar" name="enviar" value="Enviar"> 
                </form>
            </div>
            <?php if ($enviado != null) { ?>
            <div class="enviado-message"><?=$enviado?></div>
            <?php } ?>     
            <img class="img-feedback" src="./public/images/feedback.png" alt="Feedback">    
            </div>
        </div>
    </body>
</html>