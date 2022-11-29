<!DOCTYPE html>
<html lang="pt-BR">
    <?php 
        $titulo_pagina = "Game";
        require('./modulos/top-menu.php');
        
        $id_game = $_GET['id'];

        $query_game = "SELECT * FROM jogo WHERE id = {$id_game}";
        $game = mysqli_fetch_assoc(mysqli_query($conn, $query_game));

        if ($game != NULL) {
            $query_categoria = "SELECT nome FROM categoria WHERE id = {$game['id_categoria']}";
            $categoria = mysqli_fetch_assoc(mysqli_query($conn, $query_categoria));

            $query_idiomas = "SELECT DISTINCT nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$id_game}";
            $idiomas = mysqli_query($conn, $query_idiomas);

            $query_plataformas = "SELECT DISTINCT nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$id_game}";
            $plataformas = mysqli_query($conn, $query_plataformas);
        }
    ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php')?>
            
            <?php if ($game != NULL) { ?>
                <div id="content">
                    <h1 id="game-title"><?=$game['nome']?></h1>
                    <div id="game-data">
                    <div id="photo-container">
                        <img src="<?=$game['imagem_url']?>" alt="<?=$game['nome']?>">
                    </div>
                    <div id="description-container">
                        <h1>Descrição</h1>
                        <div id="text"><?=$game['descricao']?></div>
                        <div class="generic-info">
                            <div class="tag">Data de Lançamento</div>
                            <div class="value"><?=date_format(date_create($game['data_lancamento']), "d/m/Y")?></div>
                        </div>
                        <div class="generic-info">
                            <div class="tag">Desenvolvedora</div>
                            <div class="value"><?=$game['desenvolvedora']?></div>
                        </div>
                        <div class="generic-info">
                            <div class="tag">Valor</div>
                            <?php if($game['valor'] == 0 ) { ?>
                                <div class="value">Grátis</div>
                            <?php } else { ?>
                                <div class="value">R$ <?=number_format($game['valor'], 2, ",")?></div>
                            <?php } ?>
                        </div>
                        <div class="generic-info">
                            <div class="tag">Categoria</div>
                            <div class="value"><?=ucfirst(mb_strtolower($categoria['nome']))?></div>
                        </div>
                        <div class="generic-info">
                            <div class="tag">Idiomas</div>
                            <div class="value">
                                <?php while($idioma = mysqli_fetch_array($idiomas)) { 
                                    echo $idioma['nome'] . " ";
                                 } 
                                ?>
                            </div>
                        </div>
                        
                        <div class="generic-info">
                            <div class="tag">Plataformas</div>
                            <div class="value">
                                <?php while($plataforma = mysqli_fetch_array($plataformas)) { 
                                    echo $plataforma['nome'] . " ";
                                 } 
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php } else { ?>
                <div id="content">
                    <h1 id="game-title">Jogo não encontrado</h1>
                </div>
            <?php } ?>

        </div>
    </body>
</html>