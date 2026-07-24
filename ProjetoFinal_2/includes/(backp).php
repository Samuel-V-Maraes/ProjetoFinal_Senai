<?php
// header.php
// Inclua este arquivo no topo de qualquer página com: <?php include 'header.php'; ?>
// Para destacar o link ativo, defina $pagina_atual ANTES do include, ex:
// $pagina_atual = 'home';

if (!isset($pagina_atual)) {
    $pagina_atual = basename($_SERVER['PHP_SELF'], '.php');
}

function menuAtivo($pagina, $pagina_atual) {
    return $pagina === $pagina_atual ? 'ativo' : '';
}
?>
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
        <img src="img/logo.png" alt="Academia Alta Forma">
    </div>
    <nav>
        <a href="index.php" class="<?php echo menuAtivo('index', $pagina_atual); ?>">Home</a>
        <a href="nossa-academia.php" class="<?php echo menuAtivo('nossa-academia', $pagina_atual); ?>">Nossa Academia</a>
        <a href="nossos-produtos.php" class="<?php echo menuAtivo('nossos-produtos', $pagina_atual); ?>">Nossos Produtos</a>
        <a href="fale-conosco.php" class="<?php echo menuAtivo('fale-conosco', $pagina_atual); ?>">Fale Conosco</a>
    </nav>
</header>
