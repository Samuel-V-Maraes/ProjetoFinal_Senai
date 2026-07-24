
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academia Alta Forma</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .navbar-custom {
        background-color:#000;
        padding:12px 30px;
    }
    .navbar-custom .navbar-brand img {
        height:55px;
    }
    .navbar-custom .nav-link {
        color:#fff !important;
        font-weight:bold;
        letter-spacing:0.5px;
        margin-left:20px;
    }
    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link.active {
        color:#3fa9f5 !important;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="Academia Alta Forma">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuTopo"
                aria-controls="menuTopo" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menuTopo">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="academia.php">Nossa Academia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="produtos.php">Nossos Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contato.php">Fale Conosco</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS (necessário para o menu mobile funcionar) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
