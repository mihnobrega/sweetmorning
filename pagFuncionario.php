<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Morning</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Playfair+Display:wght@300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>

<body>

<header>
    <div class="container header-container">

        <a href="#" class="logo">
            <i class="fa-solid fa-mug-hot logo-icon"></i>
            <div class="logo-text">Sweet <span>Morning</span></div>
        </a>

        <div class="search-box">
            <input type="text" placeholder="Pesquisar...">
            <button>
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>


    </div>
</header>

<section class="pagfuncionario">

    <h1>Painel do Funcionário</h1>

    <p class="menu-text">
        Olá Maria Júlia e Milena, o que vocês gostariam de fazer?
    </p>

    <div class="opcoes-funcionario">
        
        <a href="funcionario/cadastrar_produto.php" class="opcao">
    <i class="fa-solid fa-plus"></i>
    <h3>Cadastrar Produto</h3>
</a>

<a href="funcionario/consultar_produtos.php" class="opcao">
    <i class="fa-solid fa-pen"></i>
    <h3>Consultar Produtos</h3>
</a>

<a href="funcionario/cadastrar_estoque.php" class="opcao">
    <i class="fa-solid fa-box"></i>
    <h3>Gerenciar Estoque</h3>
</a>

<a href="funcionario/consultar_estoque.php" class="opcao">
    <i class="fa-solid fa-trash"></i>
    <h3>Consultar Estoque </h3>
</a>

<a href="funcionario/cadastrar_cliente.php" class="opcao">
    <i class="fa-solid fa-trash"></i>
    <h3>Cadastrar Cliente </h3>
</a>

<a href="funcionario/consultar_cliente.php" class="opcao">
    <i class="fa-solid fa-trash"></i>
    <h3>Consultar Cliente </h3>
</a>

<a href="funcionario/cadastrar_funcionario.php" class="opcao">
    <i class="fa-solid fa-trash"></i>
    <h3>Cadastrar Funcionário </h3>
</a>

<a href="funcionario/consultar_funcionario.php" class="opcao">
    <i class="fa-solid fa-trash"></i>
    <h3>Consultar Funcionário </h3>
</a>



    </div>

</section>

</body>
</html>