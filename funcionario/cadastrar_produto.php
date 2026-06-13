<?php 

include("../db/conexao.php"); ?>

<!DOCTYPE html>
<html>

<head>

    <title>Cadastrar Produto</title>

    <link rel="stylesheet" href="painel.css">

</head>

<body>

<div class="main">

    <div class="page-header">

        <h1>Cadastrar Produto</h1>

        <p>Adicione novos produtos ao cardápio.</p>

    </div>

    <form
        action="salvar_produto.php"
        method="POST"
        class="form-card"
    >

        <input
            type="text"
            name="nome"
            placeholder="Nome do produto"
            required
        >

        <input
            type="text"
            name="categoria"
            placeholder="Categoria"
            required
        >

        <input
            type="number"
            step="0.01"
            name="preco"
            placeholder="Preço"
            required
        >

        <textarea
            name="descricao"
            placeholder="Descrição"
        ></textarea>

        <button type="submit">
            Salvar Produto
        </button>

    </form>

</div>

</body>
</html>