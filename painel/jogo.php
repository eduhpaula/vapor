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
    <title>Painel de Controle - Jogo</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $query_jogo = "SELECT id, nome FROM jogo";
        $jogos = mysqli_query($conn, $query_jogo);
        ?>
    </div>
    <div id="conteudo-dash">

    <a href="novo-idioma.php" class="btm-novoidioma">Cadastrar Jogo</a>

    <?php if($jogos->num_rows == 0) { ?>
        <h1 class="sem-mensagem">Não há jogos cadastrados</h1>
    <?php } else { ?>

    <a href="novo-jogo.php" class="btm-novoidioma">Novo Jogo</a>
    <div id="lista-idiomas">
        <table>
            <tr>
                <th>Jogo</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>
            <?php while($jogo = mysqli_fetch_array($jogos)) {?>
            <tr>
                <td><?=$jogo['nome']?></td>
                <td class="center"><a href="editar-jogo.php?id=<?=$jogo['id']?>">Editar</a></td>
                <td class="center"><a href="excluir-jogo.php?id=<?=$jogo['id']?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>

        <?php }?>       
    </div>
    </div>
</body>
</html>



