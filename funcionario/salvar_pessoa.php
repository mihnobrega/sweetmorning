<?php

include("../db/conexao.php");

$sql = "INSERT INTO pessoas (nome,email,senha,tipo)
VALUES (:nome,:email,:senha,:tipo)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':senha' => md5( $_POST['senha']),
    ':tipo' => $_POST['tipo']
]);
if ($_POST['tipo'] == 'cliente') {
    header("Location: consultar_cliente.php");
    exit();
}

header("Location: consultar_funcionario.php");

?>