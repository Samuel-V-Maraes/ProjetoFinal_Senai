<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta Forma | Nossa Academia</title>
  <!-- Conexões antecipadas para carregar as fontes mais rápido -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Todas as fontes unificadas (Oswald, Inter, Montserrat e Roboto) -->
  <link href="https://googleapis.com" rel="stylesheet">

  <!-- Estilos do Bootstrap e Ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Seu estilo personalizado (sempre por último para poder customizar o Bootstrap) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'includes/header.php';?>

<!-- HERO -->
<header class="hero" style="background-image:url('images/ChatGPT Image 11 de mai. de 2026, 20_39_37.png');">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-white">Nossa<br><span class="text-blue">Academia</span></h1>
        <p class="lead mt-3">Mais que uma academia, um estilo de vida.</p>
      </div>
    </div>
  </div>
</header>



<!-- NOSSA HISTÓRIA -->
<section class="py-5 bg-white section-light" style="padding-top:5rem;padding-bottom:5rem;">
  <div class="container">
    <div class="row g-5 align-items-center mb-5">
      <div class="col-lg-5">
        <img src="images\ChatGPT Image 20 de jul. de 2026, 19_41_25.png" class="w-100 rounded" style="height:260px;object-fit:cover;" alt="Fachada da academia Alta Forma">
      </div>
      <div class="col-lg-7">
        <h2 class="section-title text-dark mb-2">Nossa História</h2>
        <div class="title-underline mb-3"></div>
        <p class="text-gray mb-0" style="max-width:560px;">
          A Alta Forma nasceu em 2015 com o propósito de transformar vidas através do movimento,
          da disciplina e do bem-estar. Desde então, já ajudamos milhares de pessoas a
          conquistarem seus melhores resultados.
        </p>
      </div>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <h6 class="mv-heading text-dark">Missão</h6>
        <p class="text-gray small mb-0">Promover saúde, bem-estar e qualidade de vida através do exercício físico e atendimento de excelência.</p>
      </div>
      <div class="col-md-4">
        <h6 class="mv-heading text-dark">Visão</h6>
        <p class="text-gray small mb-0">Ser referência em transformação de vidas e excelência no mercado fitness.</p>
      </div>
      <div class="col-md-4">
        <h6 class="mv-heading text-dark">Valores</h6>
        <ul class="value-list text-gray small mb-0">
          <li>Respeito</li>
          <li>Comprometimento</li>
          <li>Superação</li>
          <li>Ética</li>
          <li>Paixão pelo que fazemos</li>
        </ul>
      </div>
    </div>

    <div class="container rounded bg-dark">
      <div class="row g-4 mb-5">
        <div class="col-md-3 stats-item">
          <i class="text-blue bi bi-hourglass-split"><strong class="text-white">    +8</strong></i>
          <div><span>Anos de História</span></div>
        </div>
        <div class="col-md-3 stats-item">
          <i class="text-blue bi bi-people-fill"><strong class="text-white">    +5 mil</strong></i>
          <div><span>Alunos Ativos</span></div>
        </div>
        <div class="col-md-3 stats-item">
          <i class="text-blue bi bi-shop"><strong class="text-white">    3</strong></i>
          <div><span>Unidades</span></div>
        </div>
        <div class="col-md-3 stats-item">
          <i class="text-blue bi bi-person-badge-fill"><strong class="text-white">    +20</strong></i>
          <div><span>Profissionais</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SOBRE / DIFERENCIAIS -->
<section class="py-5 bg-white section-light" style="padding-top:0;padding-bottom:5rem;">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <p class="eyebrow mb-2">Estrutura completa</p>
        <h2 class="section-title text-dark mb-3">Um espaço pensado para <span class="text-blue">o seu treino</span></h2>
        <p class="text-gray" style="max-width:520px;">
          Equipamentos modernos, ambiente climatizado e uma equipe pronta para te acompanhar
          em cada etapa da sua evolução. Aqui, treinar é parte da sua rotina, não uma obrigação.
        </p>
        <ul class="check-list text-dark mt-4" style="max-width:420px;">
          <li><i class="bi bi-check-circle-fill"></i> Equipamentos de última geração</li>
          <li><i class="bi bi-check-circle-fill"></i> Professores especializados</li>
          <li><i class="bi bi-check-circle-fill"></i> Ambiente climatizado</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img src="images\ChatGPT Image 11 de mai. de 2026, 20_39_37.png" class="w-100 rounded" style="height:340px;object-fit:cover;" alt="Estrutura da academia">
      </div>
    </div>
  </div>
</section>

<!-- LOCALIZAÇÃO -->
<section class="py-5 bg-white" style="background:var(--bg-panel);padding-top:4rem;padding-bottom:4rem;">
  <div class="container">
    <h3 class="section-title mb-4">Nossa <span class="text-blue">Localização</span></h3>
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <p class="text-gray mb-1">Rua das Acácias, 123 - Centro</p>
        <p class="text-gray mb-4">São Paulo - SP, 01000-000</p>
        <a href="#" class="btn-af">Ver no mapa</a>
      </div>
      <div class="col-lg-6">
        <iframe class="map-frame" loading="lazy"
          src="https://www.openstreetmap.org/export/embed.html?bbox=-46.6433%2C-23.5605%2C-46.6233%2C-23.5455&layer=mapnik&marker=-23.5530%2C-46.6333">
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
