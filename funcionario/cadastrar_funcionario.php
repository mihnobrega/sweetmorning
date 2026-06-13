<?php 

include("../db/conexao.php"); ?>

<!DOCTYPE html>
<html>

<head>

    <title>Cadastrar Funcionários</title>

    <link rel="stylesheet" href="painel.css">

</head>

<body>

<div class="main">

    <div class="page-header">

        <h1>Cadastrar Funcionários</h1>

    </div>

    <form
        action="salvar_pessoa.php"
        method="POST"
        class="form-card"
    >

        <input
            type="text"
            name="nome"
            placeholder="Nome do Funcionario"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="email"
            required
        >

        <input
            type="password"
            name="senha"
            placeholder="senha"
            required
        >

        <input 
        type="hidden"
        name="tipo"
        value="funcionario"
        >

        <button type="submit">
            Salvar
        </button>

    </form>

</div>

</body>
</html>