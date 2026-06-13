<?php

include("../db/conexao.php");

$resultado = $conn->query(
    "SELECT * FROM pessoas where tipo = '$tipoPessoa'"
);
?>
<!DOCTYPE html>
<html>

<head>

    <title><?php echo $labelTipo; ?></title>

    <link rel="stylesheet" href="painel.css">

</head>

<body>

<div class="main">

    <h1><?php echo $labelTipo; ?>s Cadastrados</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>email</th>
        </tr>

        <?php while($pessoa = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>

        <tr>

            <td><?= $pessoa['id_pessoa'] ?></td>
            <td><?= $pessoa['nome'] ?></td>
            <td><?= $pessoa['email'] ?></td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>