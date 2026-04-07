<?php
include 'conexao.php';
$id = $_GET['id'];

// Busca os dados do aluno específico
$sql = "SELECT * FROM aluno WHERE id = :id";
$smt = $conexao->prepare($sql);
$smt->bindParam(':id', $id);
$smt->execute();
$aluno = $smt->fetch(PDO::FETCH_OBJ);
?>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $aluno->id ?>">
    
    Nome: <input type="text" name="nome" value="<?php echo $aluno->nome ?>">
    Idade: <input type="text" name="idade" value="<?php echo $aluno->idade ?>">
    Email: <input type="text" name="email" value="<?php echo $aluno->email ?>">
    Telefone: <input type="text" name="telefone" value="<?php echo $aluno->telefone ?>">
    
    <input type="submit" value="Salvar Alterações">
</form>