<!DOCTYPE html>
<html lang="en">
<head>
    <title>Painel de Controle - Mensagens</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $query_mensagem = "SELECT id, nome, email, assunto, mensagem FROM mensagem_enviar";
        $mensagens = mysqli_query($conn, $query_mensagem);
        ?>
    </div>
    <div id="conteudo-dash">

    <?php if($mensagens->num_rows == 0) { ?>
        <h1 class="sem-mensagem">Não há mensagens disponíveis.</h1>
    <?php } else { ?>

    <div id="lista-mensagem">
        <table>
            <tr>
                <th class="center">Nome</th>
                <th class="center">Assunto</th>
                <th class="center">Visualizar</th>
                <th class="center">Arquivar</th>
            </tr>
            <?php while($mensagem = mysqli_fetch_array($mensagens)) {?>
            <tr>
                <td><?=$mensagem['nome']?></td>
                <td><?=$mensagem['assunto']?></td>
                <td class="center"><a href="visualizar-mensagem.php?id=<?=$mensagem['id']?>">Visualizar</a></td>
                <td class="center"><a href="arquivar-mensagem.php?id=<?=$mensagem['id']?>">Arquivar</a></td>    
            </tr>
            <?php } ?>
        </table>

    <?php }?>      
    </div>
    </div>
</body>
</html>



