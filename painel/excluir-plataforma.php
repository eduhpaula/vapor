<?php
require('./modulos/conexao.php');

$id_plataforma = $_GET['id'] ?? null;

$query_jogo_plataforma = "DELETE FROM jogo_plataforma WHERE id_plataforma = {$id_plataforma}";

$query_plataforma = "DELETE FROM plataforma WHERE id = {$id_plataforma}";

mysqli_query($conn, $query_jogo_plataforma);

mysqli_query($conn, $query_plataforma);

header('location: plataforma.php')
?>