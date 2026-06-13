<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Morning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
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
            <input type="text" placeholder="Pesquisar..." />
            <button>
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <div>
<i class="fa-solid fa-cart-shopping"></i>
<i class="fa-solid fa-heart"></i>
</div>

        <nav>
            <ul>
                <li><a href="pagCliente.html">Home</a></li>
                <li><a href="salgados.html">Salgados</a></li>
                <li><a href="doces.html">Doces</a></li>
                <li><a href="bebidas.html">Bebidas</a></li>
                
            </ul>
        </nav>
        <div>
            <i class="fa-brands fa-instagram"></i>
<i class="fa-brands fa-whatsapp"></i>
        </div>
    </div>
</header>

</body>
</html>

<form class="search-box" action="/buscar" method="GET">
    <input type="search" name="q" placeholder="O que você está procurando?" required>
    <button type="submit">Buscar</button>
</form>

<div class="slider">
    <div class="slides">
        <img src="image/banner2.png">
        <img src="image/banner3.png">
        <img src="image/banner4.png">
    </div>
</div>

              
          


  <section class="pagcliente">
    <div class="menu-header">
        <div class="hero-subtitle">
 <i class="fa-solid fa-leaf"></i>
 
           <p>Sweet Morning — Celebre o sabor de cada amanhecer.</p>
        </div>


        <p class="menu-text">
           Na Sweet Morning, cada criação é um encontro entre tradição, excelência e delicadeza, transformando simples momentos em experiências memoráveis.
        </p>

    </div>

 

</div>
    

        </div>
    </div>
</section>

        <script>
        const filterToggle =
        document.getElementById("filterToggle");

        const filtersPanel =
        document.getElementById("filtersPanel");

        filterToggle.addEventListener("click", () => {
            filtersPanel.classList.toggle("active");
        });
        </script>
</body>
</html>