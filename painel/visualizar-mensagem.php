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