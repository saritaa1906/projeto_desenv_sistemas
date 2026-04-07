<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "UPDATE aluno SET nome = :nome, idade = :idade, email = :email, telefone = :telefone WHERE id = :id";

$smt = $conexao->prepare($sql);
$smt->bindParam(':id', $id);
$smt->bindParam(':nome', $nome);
$smt->bindParam(':idade', $idade);
$smt->bindParam(':email', $email);
$smt->bindParam(':telefone', $telefone);

$smt->execute();

header('Location: index.php');
?>