<?php
    $error_message = $_GET['error'] ?? null;
?>
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
    <title>Painel de Controle - Login</title>
</head>
<body>
    <div id="login">
    <form action="./login.php" method="post" id="formlogin">
    <div id="logo">
    <img src="./public/img/logo.png" alt="Logo"><h3>LOGIN</h3>  
    </div>
        <input type="email" name="email" placeholder="e-mail" class="campo" required>
        <br>
        <input type="password" name="senha" placeholder="senha" class="campo" required>
        <br>
        <input type="submit" name="enviar" class="botaoenviar" value="Enviar">

        <?php if ($error_message != null) { ?>
            <div class="error-message"><?=$error_message?></div>
        <?php } ?>
    </div>    
</body>
</html>