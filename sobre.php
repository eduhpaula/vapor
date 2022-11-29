<?php 
    $titulo_pagina = "Sobre";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php')?>
            <div id="content">
                <div id="about-container">
                    <div id="data">
                        <img src="./public/images/logo-com-texto.png" alt="Vapor Logo com Texto">
                        <p>O Vapor é o destino perfeito para jogar, <br>  criar jogos e conversar.</p>
                        <div id="info">
                            <div class="info-data">
                                <div class="title">ON-LINE</div>
                                <div class="value">18.348.196</div>
                            </div>
                            <div class="info-data">
                                <div class="title">JOGANDO AGORA</div>
                                <div class="value">4.129.126</div>
                            </div>
                        </div>
                        <button id="vapor-install">Instalar o Vapor</button>
                    </div>
                    <div id="photo">
                        <img src="./public/images/vapor-banner.jpg" alt="Vapor Banner">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>