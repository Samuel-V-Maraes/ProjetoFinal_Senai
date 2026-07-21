<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta Forma | Fale Conosco</title>
  <link rel="preconnect" href="https://googleapis.com">
  <link rel="preconnect" href="https://gstatic.com" crossorigin>
  <link href="https://googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'includes/topo.php';?>

<!-- HERO -->
<header class="hero" style="background-image:url('images/ChatGPT Image 20 de jul. de 2026, 21_52_53.png');">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-white">Fale<br><span class="text-blue">Conosco</span></h1>
        <p class="lead mt-3">Estamos prontos para te atender! Entre em contato conosco.</p>
      </div>
    </div>
  </div>
</header>

<!-- FORMULÁRIO + INFORMAÇÕES -->
<section class="py-5" style="padding-top:5rem;padding-bottom:5rem;">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <h3 class="section-title mb-4">Envie sua <span class="text-blue">mensagem</span></h3>
        <form class="form-af">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" placeholder="Seu nome">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" placeholder="seu@email.com">
            </div>
            <div class="col-md-6">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="telefone" placeholder="(19) 90000-0000">
            </div>
            <div class="col-md-6">
              <label for="assunto" class="form-label">Assunto</label>
              <input type="text" class="form-control" id="assunto" placeholder="Assunto da mensagem">
            </div>
            <div class="col-12">
              <label for="mensagem" class="form-label">Mensagem</label>
              <textarea class="form-control" id="mensagem" placeholder="Escreva sua mensagem..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-af">Enviar Mensagem</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-5">
        <h3 class="section-title mb-4">Informações de <span class="text-blue">Contato</span></h3>
        <div class="info-item">
          <div class="label"><i class="bi bi-clock me-2"></i>Horário de atendimento</div>
          <div class="value">Segunda à sexta 06h às 22h<br>Sábado 08h às 14h</div>
        </div>
        <div class="info-item">
          <div class="label"><i class="bi bi-geo-alt me-2"></i>Endereço</div>
          <div class="value">Rua das Acácias, 123 - Centro<br>São Paulo - SP, 01000-000</div>
        </div>
        <div class="info-item">
          <div class="label"><i class="bi bi-telephone me-2"></i>Telefone</div>
          <div class="value">(19) 9750-4321</div>
        </div>
        <div class="info-item">
          <div class="label"><i class="bi bi-whatsapp me-2"></i>WhatsApp</div>
          <div class="value">(19) 9750-4321</div>
        </div>
        <div class="info-item">
          <div class="label"><i class="bi bi-envelope me-2"></i>E-mail</div>
          <div class="value">contato@altaforma.com.br</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LOCALIZAÇÃO -->
<section class="py-5" style="background:var(--bg-panel);padding-top:4rem;padding-bottom:4rem;">
  <div class="container">
    <h3 class="section-title mb-4">Nossa <span class="text-blue">Localização</span></h3>
    <div class="row g-4 align-items-center">
      <div class="col-lg-4">
        <a href="#" class="btn-af">Ver no mapa</a>
      </div>
      <div class="col-lg-8">
        <iframe class="map-frame" loading="lazy"
          src="https://www.openstreetmap.org/export/embed.html?bbox=-46.6433%2C-23.5605%2C-46.6233%2C-23.5455&layer=mapnik&marker=-23.5530%2C-46.6333">
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/rodape.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
