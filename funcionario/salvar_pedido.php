<?php

include("../db/conexao.php");

$sql = "

INSERT INTO pedidos
(cliente,valor_total,status)

VALUES (:cliente,:valor_total,:status)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':cliente' => $_POST['cliente'],
    ':valor_total' => $_POST['valor_total'],
    ':status' => $_POST['status']
]);

header("Location: consultar_pedidos.php");

?>