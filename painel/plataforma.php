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
    <title>Painel de Controle - Plataforma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $query_plataformas = "SELECT id, nome FROM plataforma";
        $plataformas = mysqli_query($conn, $query_plataformas);
        ?>
    </div>
    <div id="conteudo-dash">

    <a href="novo-idioma.php" class="btm-novoidioma">Cadastrar Plataforma</a>

    <?php if($plataformas->num_rows == 0) { ?>
        <h1 class="sem-mensagem">Não há plataformas cadastrados</h1>
    <?php } else { ?>

    <a href="nova-plataforma.php" class="btm-novoidioma">Nova Plataforma</a>
    <div id="lista-idiomas">
        <table>
            <tr>
                <th>Plataforma</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>
            <?php while($plataforma = mysqli_fetch_array($plataformas)) {?>
            <tr>
                <td><?=$plataforma['nome']?></td>
                <td class="center"><a href="editar-plataforma.php?id=<?=$plataforma['id']?>">Editar</a></td>
                <td class="center"><a href="excluir-plataforma.php?id=<?=$plataforma['id']?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>

    <?php }?>   
    </div>
    </div>
</body>
</html>



