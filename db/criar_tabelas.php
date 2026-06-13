<?php

require_once "conexao.php";

try {

    $sqlClientes = "
    CREATE TABLE IF NOT EXISTS pessoas (
        id_pessoa INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(150) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL,
        tipo ENUM('cliente','funcionario') NOT NULL DEFAULT 'cliente',
        data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $conn->exec($sqlClientes);

    $sqlProdutos = "
    CREATE TABLE IF NOT EXISTS produtos (
        id_produto INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        categoria VARCHAR(50) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        descricao TEXT,
        data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $conn->exec($sqlProdutos);

    $sqlPedidos = "
    CREATE TABLE IF NOT EXISTS pedidos (
        id_pedido INT AUTO_INCREMENT PRIMARY KEY,
        cliente VARCHAR(100) NOT NULL,
        valor_total DECIMAL(10,2) NOT NULL,
        status VARCHAR(30) NOT NULL,
        data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $conn->exec($sqlPedidos);

    $sqlEstoque = "
    CREATE TABLE IF NOT EXISTS estoque (
        id_estoque INT AUTO_INCREMENT PRIMARY KEY,
        produto VARCHAR(100) NOT NULL,
        quantidade INT NOT NULL,
        ultima_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    $conn->exec($sqlEstoque);

    echo "<h2>Tabelas criadas com sucesso!</h2>";

} catch(PDOException $e) {

    echo "Erro ao criar tabelas: " . $e->getMessage();

}
?>