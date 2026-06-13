<?php

include("../db/conexao.php");

$sql = "SELECT * FROM pedidos";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultar Pedidos</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>

<?php include("sidebar.php"); ?>

<div class="main">

    <div class="page-header">
        <h1>Pedidos Cadastrados</h1>
        <p>Visualize todos os pedidos realizados.</p>
    </div>

    <table class="tabela">

        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Status</th>
        </tr>

        <?php while($pedido = mysqli_fetch_assoc($resultado)){ ?>

        <tr>
            <td><?php echo $pedido['id_pedido']; ?></td>
            <td><?php echo $pedido['cliente']; ?></td>
            <td>R$ <?php echo number_format($pedido['valor_total'],2,",","."); ?></td>
            <td><?php echo $pedido['status']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>