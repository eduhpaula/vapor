<?php
require('./modulos/conexao.php');

$id_categoria = $_GET['id'] ?? null;

$query_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";

mysqli_query($conn, $query_categoria);

header('location: categoria.php')
?>