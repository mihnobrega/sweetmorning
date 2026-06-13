<?php

include("../db/conexao.php");

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sql = "

INSERT INTO estoque
(produto,quantidade)
VALUES
(:produto,:quantidade)

";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':produto' => $_POST['produto'],
    ':quantidade' => $_POST['quantidade']
]);

header("Location: consultar_estoque.php");

?>