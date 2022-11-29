<?php

$query_ultimos_lancamentos = "SELECT id, nome FROM jogo ORDER BY data_lancamento DESC LIMIT 3";
$resultado_ultimos_lancamentos = mysqli_query($conn, $query_ultimos_lancamentos);

$query_categorias = "SELECT id, nome FROM categoria ORDER BY nome ASC";
$resultado_query_categorias = mysqli_query($conn, $query_categorias);

?>

<div id="side-menu">
    <div class="menu-header">ÚLTIMOS LANÇAMENTOS</div>

    <?php while($linha_ultimo_lancamento = mysqli_fetch_array(
        $resultado_ultimos_lancamentos)) { ?>

    <div class="item">
        <a 
            title="<?=ucfirst(mb_strtolower($linha_ultimo_lancamento['nome']))?>" 
            href="game.php?id=<?=$linha_ultimo_lancamento['id']?>">
            <?=ucfirst(mb_strtolower($linha_ultimo_lancamento['nome']))?>
        </a>
    </div>

    <?php } ?>

    <div class="menu-header">VER POR CATEGORIA</div>

    <?php while($linha_categoria = mysqli_fetch_array($resultado_query_categorias)) { ?>

    <div class="item">
        <a
            title="<?=ucfirst(mb_strtolower($linha_categoria['nome']))?>" 
            href="categoria.php?id=<?=$linha_categoria['id']?>">
            <?=ucfirst(mb_strtolower($linha_categoria['nome']))?>
        </a>
    </div>

    <?php } ?>

</div>