<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$tipoPessoa = $_POST['tipo'];

include("db/conexao.php");

$stmt = $conn->prepare(
    "SELECT * FROM pessoas
     where tipo = :tipo
       and email = :email 
       and senha = :senha"
);


$result = $stmt->execute([
    ':tipo' => $tipoPessoa,
    ':email' => $email,
    ':senha' => md5 ($senha)
]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if($usuario){

    if ($_POST['tipo'] == 'cliente') {
        header("Location: pagCliente.php");
        exit();
    }

    header("Location: pagFuncionario.php");

}else{

    echo "Email ou senha inválidos";

}

?>