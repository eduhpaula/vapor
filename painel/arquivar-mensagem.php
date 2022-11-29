<?php

require('./modulos/conexao.php');

$id_mensagem = $_GET['id'] ?? null;

$query_arquivar = "INSERT INTO mensagem_arquivar (nome, email, assunto, mensagem) (SELECT nome, email, assunto, mensagem FROM mensagem_enviar WHERE id = {$id_mensagem})";
$arquivar = mysqli_query($conn, $query_arquivar);

$query_excluir = "DELETE FROM mensagem_enviar WHERE id = {$id_mensagem}";
$excluir = mysqli_query($conn, $query_excluir);

header('location: mensagem.php');


?>