<?php

    include 'conexao.php';

    $sql = " SELECT * FROM aluno ";
    $consulta = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="inserir.php" method="get">
        Nome: <input type="text" name="nome">
        Idade: <input type="text" name="idade">
        Email: <input type="text" name="email">
        Telefone: <input type="text" name="telefone">
        <input type="submit" value="Salvar">
    </form>
    
    <br><br>

    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->idade ?></td>
                <td><?php echo $linha->email ?></td>
                <td><?php echo $linha->telefone ?></td>

                <td>
    <a href="editar.php?id=<?php echo $linha->id ?>">Editar</a> | 
    <a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>     