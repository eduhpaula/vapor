<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Painel de Controle - Categoria</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $query_categorias = "SELECT id, nome FROM categoria";
        $categorias = mysqli_query($conn, $query_categorias);
        ?>
    </div>
    <div id="conteudo-dash">

    <a href="novo-idioma.php" class="btm-novoidioma">Cadastrar Categoria</a>

    <?php if($categorias->num_rows == 0) { ?>
        <h1 class="sem-mensagem">Não há categoria cadastradas</h1>
    <?php } else { ?>

    <a href="nova-categoria.php" class="btm-novoidioma">Nova Categoria</a>
    <div id="lista-idiomas">
        <table>
            <tr>
                <th>Categoria</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>
            <?php while($categoria = mysqli_fetch_array($categorias)) {?>
            <tr>
                <td><?=$categoria['nome']?></td>
                <td class="center"><a href="editar-categoria.php?id=<?=$categoria['id']?>">Editar</a></td>
                <td class="center"><a href="excluir-categoria.php?id=<?=$categoria['id']?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>

        <?php }?>     
    </div>
    </div>
</body>
</html>



