<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
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
                <td class="center"><a onclick="excluirIdioma(<?=$idioma['id']?>)" href="#">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>

    <?php }?>

    </div>
    </div>
</body>
</html>



