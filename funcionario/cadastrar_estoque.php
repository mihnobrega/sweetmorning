<?php

include("../db/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Controle de Estoque</title>

    <link rel="stylesheet" href="../painel.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="main">

    <div class="page-header">

        <h1>Controle de Estoque</h1>

        <p>
            Gerencie a quantidade disponível de produtos.
        </p>

    </div>

    <form
        action="salvar_estoque.php"
        method="POST"
        class="form-card"
    >

        <div class="input-group">

            <label>
                <i class="fa-solid fa-box"></i>
                Produto
            </label>

            <input
                type="text"
                name="produto"
                placeholder="Nome do Produto"
                required
            >

        </div>

        <div class="input-group">

            <label>
                <i class="fa-solid fa-warehouse"></i>
                Quantidade
            </label>

            <input
                type="number"
                name="quantidade"
                placeholder="Quantidade em Estoque"
                min="0"
                required
            >

        </div>

        <button type="submit">

            <i class="fa-solid fa-floppy-disk"></i>

            Atualizar Estoque

        </button>

    </form>

</div>

</body>

</html>