<?php

include("../db/conexao.php");

$sql = "SELECT * FROM estoque";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultar Estoque</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>

<div class="main">

    <div class="page-header">
        <h1>Controle de Estoque</h1>
        <p>Visualize os produtos disponíveis no estoque.</p>
    </div>

    <table class="tabela">

        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
        </tr>

        <?php while($estoque = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>

        <tr>
            <td><?php echo $estoque['id_estoque']; ?></td>
            <td><?php echo $estoque['produto']; ?></td>
            <td><?php echo $estoque['quantidade']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>