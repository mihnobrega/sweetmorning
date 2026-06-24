<?php

include("../db/conexao.php");

$resultado = $conn->query("SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html>

<head>

    <title>Produtos</title>

    <link rel="stylesheet" href="../painel.css">

</head>

<body>

<div class="main">

    <h1>Produtos Cadastrados</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>

        <?php while($produto = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>

        <tr>

            <td><?= $produto['id_produto'] ?></td>

            <td><?= $produto['nome'] ?></td>

            <td><?= $produto['categoria'] ?></td>

            <td>R$ <?= $produto['preco'] ?></td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>