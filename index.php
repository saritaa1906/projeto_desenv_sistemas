<?php

    $host = "127.0.0.1";
    $user = "root";
    $porta = "3306";
    $password = "ceub123456";
    $db = "projeto";


    $conexao = new PDO(
        'mysql:host='.$host.';
        port='.$porta.';
        dbname='.$db,
        $user,
        $password);

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

        <?php while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><a href="excluir.php">Excluir</a></td>
            </tr>
    <?php } ?>

    </table>
    
</body>
</html>
