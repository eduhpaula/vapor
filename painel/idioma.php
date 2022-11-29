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
    <title>Painel de Controle - Idioma</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $query_idiomas = "SELECT id, nome FROM idioma";
        $idiomas = mysqli_query($conn, $query_idiomas);
        ?>
    </div> 

    <div id="conteudo-dash">

    <a href="novo-idioma.php" class="btm-novoidioma">Cadastrar Idioma</a>

    <?php if($idiomas->num_rows == 0) { ?>
        <h1 class="sem-mensagem">Não há idiomas cadastrados</h1>
    <?php } else { ?>
        
    <a href="novo-idioma.php" class="btm-novoidioma">Novo Idioma</a>

    <div id="lista-idiomas">
        <table>
            <tr>
                <th>Idioma</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>
            <?php while($idioma = mysqli_fetch_array($idiomas)) {?>
            <tr>
                <td><?=$idioma['nome']?></td>
                <td class="center"><a href="editar-idioma.php?id=<?=$idioma['id']?>">Editar</a></td>
                <td class="center"><a href="excluir-idioma.php?id=<?=$idioma['id']?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>

    <?php }?>

    </div>
    </div>
</body>
</html>



