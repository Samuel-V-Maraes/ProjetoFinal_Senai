<?php
// header.php
// Inclua este arquivo no topo de qualquer página com: <?php include 'header.php'; ????>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Academia Alta Forma</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }

    .topo {
        background-color:#000;
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding:12px 40px;
        font-family:Arial, Helvetica, sans-serif;
    }

    .topo .logo {
        display:flex;
        align-items:center;
        gap:10px;
    }

    .topo .logo img {
        height:60px;
    }

    .topo nav {
        display:flex;
        gap:40px;
    }

    .topo nav a {
        color:#fff;
        text-decoration:none;
        font-weight:bold;
        font-size:15px;
        letter-spacing:0.5px;
        transition:color 0.2s ease;
    }

    .topo nav a:hover,
    .topo nav a.ativo {
        color:#3fa9f5;
    }

    @media (max-width:768px) {
        .topo { flex-direction:column; gap:15px; padding:15px; }
        .topo nav { flex-wrap:wrap; justify-content:center; gap:20px; }
    }
</style>
</head>
<body>

<header class="topo">
    <div class="logo">
        <img src="images/logo-alta-forma.png" alt="Academia Alta Forma" class="af-footer__logo">
    </div>
    <nav>
        <a href="index.php" class="">Home</a>
        <a href="academia.php" class="">Nossa Academia</a>
        <a href="produtos.php" class="">Nossos Produtos</a>
        <a href="contato.php" class="">Fale Conosco</a>
    </nav>
</header>
