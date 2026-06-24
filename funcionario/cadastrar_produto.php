<?php

include("../db/conexao.php");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

```
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastrar Produto</title>

<link rel="stylesheet" href="../painel.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="main">

```
<div class="page-header">

    <h1>Cadastrar Produto</h1>

    <p>
        Adicione novos produtos ao cardápio da Sweet Morning.
    </p>

</div>

<form
    action="salvar_produto.php"
    method="POST"
    class="form-card"
>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-bread-slice"></i>
            Nome do Produto
        </label>

        <input
            type="text"
            name="nome"
            placeholder="Ex: Croissant de Chocolate"
            required
        >

    </div>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-tags"></i>
            Categoria
        </label>

        <input
            type="text"
            name="categoria"
            placeholder="Ex: Doces, Pães, Bebidas..."
            required
        >

    </div>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-dollar-sign"></i>
            Preço
        </label>

        <input
            type="number"
            step="0.01"
            name="preco"
            placeholder="0.00"
            required
        >

    </div>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-align-left"></i>
            Descrição
        </label>

        <textarea
            name="descricao"
            placeholder="Descrição do produto..."
        ></textarea>

    </div>

    <button type="submit">

        <i class="fa-solid fa-floppy-disk"></i>

        Salvar Produto

    </button>

</form>

</div>

</body>

</html>
