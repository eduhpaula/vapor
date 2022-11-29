<?php 
require('./modulos/conexao.php');

$email = $_POST['email'] ?? null;
$nome = $_POST['nome'] ?? null;
$assunto = $_POST['assunto'] ?? null;
$mensagem = $_POST['mensagem'] ?? null;

$mensagem = addslashes($mensagem);


$query_suporte = "INSERT INTO mensagem_enviar (email, nome, assunto, mensagem) VALUE ('{$email}', '{$nome}', '{$assunto}', '{$mensagem}')";
mysqli_query($conn, $query_suporte);

if ($administrador == null) {
    header('Location: suporte.php?enviado=Sua mensagem foi enviado com sucesso!');
}
