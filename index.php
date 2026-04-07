<?php

    include 'conexao.php';

    $sql = " SELECT * FROM aluno ";
<<<<<<< HEAD
    $consulta = $conexao->query($sql);

?>
=======
    
    $consulta = $conexao->query($sql);

?>

>>>>>>> d6a309490cf832133a0a83ec7fb771b9eb749297
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<<<<<<< HEAD
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
=======
<style>
table, th, td {
  border: 1px solid black;
}

th {
  background-color: purple;
  color: white;
}

td {
  background-color: lightgray;
}
</style>

    <table width="100%" border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Excluir</td>
        </tr>

>>>>>>> d6a309490cf832133a0a83ec7fb771b9eb749297
        <?php while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
<<<<<<< HEAD
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
=======
                <td><a href="excluir.php?id=<?php echo $linha->id?>">Excluir</a></td>
            </tr>
    <?php } ?>

    </table>
    
</body>
</html>
>>>>>>> d6a309490cf832133a0a83ec7fb771b9eb749297
