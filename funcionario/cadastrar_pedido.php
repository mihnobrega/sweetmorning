<?php

include("../db/conexao.php");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

```
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastrar Pedido</title>

<link rel="stylesheet" href="../painel.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
```

</head>

<body>

<div class="main">
<div class="page-header">

    <h1>Cadastrar Pedido</h1>

    <p>
        Registre novos pedidos realizados pelos clientes.
    </p>

</div>

<form
    action="salvar_pedido.php"
    method="POST"
    class="form-card"
>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-user"></i>
            Cliente
        </label>

        <input
            type="text"
            name="cliente"
            placeholder="Nome do Cliente"
            required
        >

    </div>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-dollar-sign"></i>
            Valor Total
        </label>

        <input
            type="number"
            step="0.01"
            name="valor_total"
            placeholder="Valor do Pedido"
            required
        >

    </div>

    <div class="input-group">

        <label>
            <i class="fa-solid fa-truck"></i>
            Status do Pedido
        </label>

        <select name="status" required>

            <option value="">Selecione</option>

            <option value="Pendente">
                Pendente
            </option>

            <option value="Preparando">
                Preparando
            </option>

            <option value="Entregue">
                Entregue
            </option>

        </select>

    </div>

    <button type="submit">

        <i class="fa-solid fa-cart-shopping"></i>

        Salvar Pedido

    </button>

</form>
</div>

</body>
</html>
