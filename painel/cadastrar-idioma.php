<?php

require("./modulos/conexao.php");

$nome_idioma = $_POST['idioma'] ?? null;

$consultar_idioma = "SELECT nome FROM idioma WHERE nome = '{$nome_idioma}'";

$criar_idioma = "INSERT INTO idioma (nome) VALUES ('{$nome_idioma}')";

$idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));

if ($idioma == null) {
    mysqli_query($conn, $criar_idioma);
    header("location: idioma.php");
} else {
    header("location: novo-idioma.php?error=Este idioma já está cadastrado");
}

?>