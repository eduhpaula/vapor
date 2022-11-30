<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <title>Painel de Controle - Mensagens</title>
</head>
<body>
    <div class="bodymarg"> 
        <?php require('./modulos/top-dash.php') ?>
        <?php require('./modulos/side-dash.php') ?>
        <?php
        $id_mensagem = $_GET['id'] ?? null;
        $query_mensagem = "SELECT * FROM mensagem_enviar WHERE id = {$id_mensagem}";
        $mensagens = mysqli_query($conn, $query_mensagem);
        ?>
    </div>
    <div id="conteudo-dash">
    <a href="mensagem.php" class="btm-novoidioma">Voltar</a>
        <?php while($mensagem = mysqli_fetch_array($mensagens)) {?>
            <div id="lista-visualizar">
                <div class="visualizar-lista">
                    <h3>Nome:</h3>
                    <p><?= $mensagem['nome']?></p>
                </div>

                <div class="visualizar-lista">
                    <h3>E-Mail:</h3>
                    <p><?= $mensagem['email']?></p>
                </div>

                <div class="visualizar-lista">
                    <h3>Assunto:</h3>
                    <p><?= $mensagem['assunto']?></p>
                </div>    
            </div>

            <div class="visualizar-mensagem">
                    <h3>Mensagem:</h3>
                    <p><?= $mensagem['mensagem']?></p>
            </div> 
                              
        <?php } ?>
    </div>
</body>
</html>