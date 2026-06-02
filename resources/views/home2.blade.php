<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Título da página -->
  <meta property="og:title" content="Meu Portfólio" />

  <!-- Descrição que aparece no preview -->
  <meta property="og:description" content="Portfólio de Joelmir Carravetta Matthes — Desenvolvedor Front-End com experiência em HTML, CSS, JavaScript, React e Bootstrap. Projetos, certificações e trajetória profissional na área de TI." />

  <!-- URL canônica da página -->
  <meta property="og:url" content="https://joelmircarravetta.free.nf/" />

  <!-- Imagem de preview (deve estar hospedada e acessível publicamente) -->
  <meta property="og:image" content="https://joelmircarravetta.free.nf/img/site.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="1200" />

  <!-- Tipo de conteúdo (ex: website, article, video) -->
  <meta property="og:type" content="website" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

 <!-- O Laravel vai carregar o seu style.css personalizado direto da pasta pública -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Carrega o seu script personalizado direto da pasta pública -->
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- Icone page -->
  <link rel="icon" href="{{ asset('img/ico.PNG') }}">

  <title>Meu Portfólio - Joelmir Matthes Carravetta</title>
</head>
<body>
<div class="mainContent" id="mainContent">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Meu Portfólio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
          <!-- Alterado para usar o sistema de rotas do Laravel -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/certificados') }}">Certificações</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Home -->
  <section id="home" class="vh-100 d-flex align-items-center bg-light text-center">
    <div class="container">
        <div id="homebtnrede">
          <a href="https://www.linkedin.com/in/joelmir-carravetta/" target="_blank" class="btn btn-outline-primary bi-linkedin"></a>
          <a href="https://www.instagram.com/joelmircarravetta/" target="_blank" class="btn btn-outline-primary bi-instagram"></a>
          <a href="https://wa.me/5551991250471" target="_blank" class="btn btn-outline-primary bi-whatsapp"></a>
        </div>

      <!-- Corrigido caminho da imagem para usar o helper asset -->
      <img src="{{ asset('img/perfil_pro_baixa.png') }}" alt="Foto pessoal" class="rounded-circle mb-3 shadow" width="150">
      <h1 class="fw-bold">Olá, eu sou <br><span class="text-white bg-primary px-2 rounded">Joelmir Matthes</span></h1>
      <p class="lead">Desenvolvedor Front-End | HTML | CSS | Bootstrap | JavaScript</p>
      <a href="#projetos" class="btn btn-outline-primary">Ver Meus Projetos</a>
    </div>
  </section>

  <!-- Sobre -->
  <section id="sobre" class="py-5 fade-in">
    <div class="container text-center">
      <br>
      <h2 class="mb-4">Sobre Mim</h2>
      <p>Sou estudante de Análise e Desenvolvimento de Sistemas e formado como Técnico em Informática.</p>
      <p>Durante minha formação, venho desenvolvendo conhecimentos em lógica de programação, banco de dados e desenvolvimento web, atuando tanto no Front-End (HTML, CSS, JavaScript, React, Bootstrap, UI/UX) quanto no Back-End (Node.js, Python, Java, PHP, MySQL e JavaScript).</p>
      <p>Tenho facilidade de aprendizado, boa comunicação e gosto de trabalhar em equipe. Sou motivado por desafios e estou sempre buscando evoluir, tanto técnica quanto profissionalmente.</p>
      <p>Meu foco atual é aplicar na prática tudo o que venho aprendendo, participar de projetos reais, contribuir com soluções criativas e continuar minha trajetória de crescimento na área de TI.</p>
      <p>Busco uma oportunidade que me permita desenvolver minhas habilidades, aprender com profissionais experientes e agregar valor ao time e à empresa.</p>

      <div class="icon-gallery">
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML">
          <p>HTML</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS">
          <p>CSS</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
          <p>JavaScript</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React">
          <p>React</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap">
          <p>Bootstrap</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js">
          <p>Node.js</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python">
          <p>Python</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java">
          <p>Java</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
          <p>PHP</p>
        </div>
        <div class="icon-item">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">
          <p>MySQL</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projetos -->
  <section id="projetos" class="py-5 bg-light fade-in">
    <div class="container">
      <br>
      <h2 class="text-center mb-4">Projetos</h2>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card">
            <!-- Corrigido caminho da imagem -->
            <img src="{{ asset('img/logo_meu_portfolio.png') }}" class="card-img-top" alt="Projeto 1">
            <div class="card-body">
              <h5 class="card-title">Sistema web Meu Portfólio</h5>
              <p class="card-text">Aplicação desenvolvida para gestão estratégica de portfólios e certificações, com foco em visualização de projetos.</p>
              <a onclick="abrirPopup('popup1')" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <!-- Corrigido caminho da imagem -->
            <img src="{{ asset('img/genius.png') }}" class="card-img-top" alt="Projeto 2">
            <div class="card-body">
              <h5 class="card-title">Genius Sonoro - Para deficientes visuais</h5>
              <p class="card-text">Projeto e desenvolvimento no-code no MIT Inventor</p>
              <a onclick="abrirPopup('popup2')" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <!-- Corrigido caminho da imagem -->
            <img src="{{ asset('img/logo dolcezza.jpg') }}" class="card-img-top" alt="Projeto 3">
            <div class="card-body">
              <h5 class="card-title">Dolcezza - Dolceria Artesanal</h5>
              <p class="card-text">Criação da identidade visual completa para a dolceria artesanal Dolcezza, incluindo logotipo, paleta de cores e materiais promocionais.</p>
              <a onclick="abrirPopup('popup3')" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Estrutura dos Popups (Modais Personalizados) -->

<!-- POPUP 1: Sistema web Meu Portfólio -->
<div id="popup1" class="popup-wrapper">
  <div class="popup-box bg-white rounded shadow p-4 position-relative">
    <!-- Botão de Fechar -->
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" onclick="fecharPopup('popup1')" aria-label="Close"></button>

    <div class="text-center mb-3">
      <img src="{{ asset('img/logo_meu_portfolio.png') }}" alt="Logo Meu Portfólio" class="img-fluid rounded mb-2" style="max-height: 150px;">
      <h3 class="fw-bold text-primary">Sistema Web Meu Portfólio</h3>
    </div>

    <div class="popup-body">
      <p>Este sistema foi desenvolvido para realizar a gestão estratégica de portfólios e certificações com foco em visualização limpa de projetos de TI.</p>
      <h5 class="fw-bold text-secondary">Tecnologias Utilizadas:</h5>
      <span class="badge bg-primary me-1">HTML5</span>
      <span class="badge bg-primary me-1">CSS3</span>
      <span class="badge bg-primary me-1">Bootstrap 5</span>
      <span class="badge bg-primary me-1">Laravel (PHP)</span>
    </div>

    <div class="text-end mt-4">
      <button class="btn btn-secondary" onclick="fecharPopup('popup1')">Fechar</button>
      <a href="https://github.com/jcarravetta/lavarel_projeto" target="_blank" class="btn btn-primary bi-github"> Ver Código</a>
    </div>
  </div>
</div>

<!-- POPUP 2: Genius Sonoro -->
<div id="popup2" class="popup-wrapper">
  <div class="popup-box bg-white rounded shadow p-4 position-relative">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" onclick="fecharPopup('popup2')" aria-label="Close"></button>

    <div class="text-center mb-3">
      <img src="{{ asset('img/genius.png') }}" alt="Genius Sonoro" class="img-fluid rounded mb-2" style="max-height: 150px;">
      <h3 class="fw-bold text-primary">Genius Sonoro</h3>
    </div>

    <div class="popup-body">
      <p>Um projeto inclusivo desenvolvido com foco em acessibilidade para deficientes visuais, recriando o clássico jogo Genius com forte apelo auditivo e comandos adaptados.</p>
      <h5 class="fw-bold text-secondary">Tecnologias Utilizadas:</h5>
      <span class="badge bg-success me-1">MIT App Inventor</span>
      <span class="badge bg-success me-1">No-Code</span>
      <span class="badge bg-success me-1">UI/UX Inclusivo</span>
    </div>

    <div class="text-end mt-4">
      <button class="btn btn-secondary" onclick="fecharPopup('popup2')">Fechar</button>
    </div>
  </div>
</div>

<!-- POPUP 3: Dolcezza -->
<div id="popup3" class="popup-wrapper">
  <div class="popup-box bg-white rounded shadow p-4 position-relative">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" onclick="fecharPopup('popup3')" aria-label="Close"></button>

    <div class="text-center mb-3">
      <img src="{{ asset('img/logo dolcezza.jpg') }}" alt="Dolcezza" class="img-fluid rounded mb-2" style="max-height: 150px;">
      <h3 class="fw-bold text-primary">Dolcezza - Dolceria Artesanal</h3>
    </div>

    <div class="popup-body">
      <p>Desenvolvimento completo da identidade visual para a marca Dolcezza. O escopo incluiu a criação do logotipo oficial, definição de paleta de cores corporativa e peças gráficas promocionais.</p>
      <h5 class="fw-bold text-secondary">Habilidades Aplicadas:</h5>
      <span class="badge bg-info text-dark me-1">Identidade Visual</span>
      <span class="badge bg-info text-dark me-1">Design Gráfico</span>
      <span class="badge bg-info text-dark me-1">Branding</span>
    </div>

    <div class="text-end mt-4">
      <button class="btn btn-secondary" onclick="fecharPopup('popup3')">Fechar</button>
    </div>
  </div>
</div>



</body>
</html>
