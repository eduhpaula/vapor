<?php

require('./modulos/conexao.php');

$nome_plataforma = $_POST['plataforma'] ?? null;
$id_plataforma = $_POST['id'] ?? null;

$consultar_plataforma = "SELECT nome FROM plataforma WHERE nome = '{$nome_plataforma}' AND id != '{$id_plataforma}'";

$plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));

$atualizar_plataforma = "UPDATE plataforma SET nome = '{$nome_plataforma}' WHERE id = {$id_plataforma}";

if ($plataforma == null) {
    mysqli_query($conn, $atualizar_plataforma);
    header("location: plataforma.php");
} else {
    header("location: editar-plataforma.php?error=Esta plataforma já está cadastrada&id={$id_plataforma}");
}

?>