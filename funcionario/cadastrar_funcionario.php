<?php

include("../db/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Funcionário</title>

    <link rel="stylesheet" href="../painel.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="main">

    <div class="page-header">

        <h1>Cadastrar Funcionário</h1>

        <p>
            Adicione novos funcionários ao sistema Sweet Morning.
        </p>

    </div>

    <form
        action="salvar_pessoa.php"
        method="POST"
        class="form-card"
    >

        <div class="input-group">

            <label>
                <i class="fa-solid fa-user"></i>
                Nome do Funcionário
            </label>

            <input
                type="text"
                name="nome"
                placeholder="Digite o nome completo"
                required
            >

        </div>

        <div class="input-group">

            <label>
                <i class="fa-solid fa-envelope"></i>
                E-mail
            </label>

            <input
                type="email"
                name="email"
                placeholder="Digite o e-mail"
                required
            >

        </div>

        <div class="input-group">

            <label>
                <i class="fa-solid fa-lock"></i>
                Senha
            </label>

            <input
                type="password"
                name="senha"
                placeholder="Digite a senha"
                required
            >

        </div>

        <input
            type="hidden"
            name="tipo"
            value="funcionario"
        >

        <button type="submit">

            <i class="fa-solid fa-user-plus"></i>

            Cadastrar Funcionário

        </button>

    </form>

</div>

</body>

</html>