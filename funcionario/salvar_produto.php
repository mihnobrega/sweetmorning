<?php

include("../db/conexao.php");

$sql = "INSERT INTO produtos (nome,categoria,preco,descricao)
VALUES (:nome,:categoria,:preco,:descricao)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':nome' => $_POST['nome'],
    ':categoria' => $_POST['categoria'],
    ':preco' => $_POST['preco'],
    ':descricao' => $_POST['descricao']
]);

header("Location: consultar_produtos.php");
exit();

?>