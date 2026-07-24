<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta Forma | Página Inicial</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'includes/header.php';?>


<!-- HERO -->
<header class="hero" style="background-image:url('images/image.png');">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-white">
          <span class="text-blue">Keep</span><br>
          <span style="color:#3a3a40;">Fitness</span><br>
          <span class="text-blue">Training</span>
        </h1>
      </div>
    </div>
  </div>
</header>

<!-- TREINO DIÁRIO -->
<section class="py-5 py-lg-6 bg-white" style="padding-top:5rem;padding-bottom:5rem;">
  <div class="container bg-white">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-7">
            <img src="images/img2.png" class="w-100" style="height:320px;object-fit:cover;" alt="Treino funcional">
          </div>
          <div class="col-5 d-flex align-items-end">
            <img src="images/img3.png" class="w-100" style="height:220px;object-fit:cover;" alt="Musculação">
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <p class="eyebrow text-gray mb-2">Musculação & Saúde</p>
        <h2 class="section-title text-dark mb-3">Treino <span class="text-blue">Diário</span></h2>
        <p class="text-gray mb-4" style="max-width:520px;">
          A musculação melhora força, saúde, postura e
        autoestima. Também reduz estresse, previne
        lesões e aumenta disposição diária. Seu corpo
        agradece. Incrível como humanos precisam
        levantar pesos para continuar funcionando
        minimamente bem.
        </p>
        <ul class="check-list text-dark" style="max-width:420px;">
          <li><i class="bi bi-check-circle-fill"></i> CrossFit</li>
          <li><i class="bi bi-check-circle-fill"></i> zumba</li>
          <li><i class="bi bi-check-circle-fill"></i> Musculação</li>
          <li><i class="bi bi-check-circle-fill"></i> Pilates</li>
          
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ÁREAS DE ESPECIALIZAÇÃO -->
<section class="py-5 bg-light" style="background:var(--bg-panel);">
  <div class="container py-4 bg-white">
    <p class="eyebrow text-red mb-2">Excelência em cada treino</p>
    <h2 class="section-title text-dark mb-4">Minhas Áreas de <span class="text-red">Especialização</span></h2>
    <div class="row g-3">
      <div class="col-md-6">
        <img src="images/ChatGPT%20Image%2014%20de%20mai.%20de%202026,%2021_41_33.png" class="w-200" style="height:360px;object-fit:cover;" alt="Especialização em treino de força">
      </div>
      <div class="col-md-6">
        <img src="images/ChatGPT%20Image%2014%20de%20mai.%20de%202026,%2021_43_05.png" class="w-200" style="height:360px;object-fit:cover;" alt="Especialização em treino funcional">
      </div>
    </div>
  </div>
</section>

<!-- MINHAS ESPECIALIDADES -->
<section class="py-5 bg-white" style="padding-top:5rem;padding-bottom:5rem;">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 bg-dark rounded">
        <div class="container">
          <p class="eyebrow mb-2">Minhas Especialidades</p>
          <div class="skill">
            <div class="skill-label"><span>Musculação</span><span>95%</span></div>
            <div class="progress"><div class="progress-bar" style="width:95%"></div></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>CrossFit</span><span>88%</span></div>
            <div class="progress"><div class=" progress-bar" style="width:88%"></div></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Funcional</span><span>90%</span></div>
            <div class="progress"><div class="progress-bar" style="width:90%"></div></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Nutrição Esportiva</span><span>80%</span></div>
            <div class="progress"><div class="progress-bar" style="width:80%"></div></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 bg-white">
        <img src="images/img4.png" class="w-300" style="height:440px;object-fit:cover;" alt="Treino de especialidade">
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php';?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
