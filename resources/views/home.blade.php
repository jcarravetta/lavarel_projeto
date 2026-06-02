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

  <!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


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
          <li class="nav-item"><a class="nav-link" href="/certificado/certificados.php">Certificações</a></li>
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

      <img src="img/perfil_pro_baixa.png" alt="Foto pessoal" class="rounded-circle mb-3 shadow" width="150">
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

  <!-- Imagens externas Bootstrap-->
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
            <img src="img/logo_meu_portfolio.png" class="card-img-top" alt="Projeto 1">
            <div class="card-body">
              <h5 class="card-title">Sistema web Meu Portfólio</h5>
              <p class="card-text">Aplicação desenvolvida para gestão estratégica de portfólios e certificações, com foco em visualização de projetos.</p>
              <a onclick="abrirPopup('popup1')" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="img/genius.png" class="card-img-top" alt="Projeto 2">
            <div class="card-body">
              <h5 class="card-title">Genius Sonoro - Para deficientes visuais</h5>
              <p class="card-text">Projeto e desenvolvimento no-code no MIT Inventor</p>
              <a onclick="abrirPopup('popup2')" class="btn btn-outline-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="img/logo dolcezza.jpg" class="card-img-top" alt="Projeto 3">
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

  <!-- Contato -->
  <section id="contato" class="py-5 fade-in">
  <div  class="mainContent" id="mainContent">
    <h2 class="text-center mb-4">Contato</h2>

    <!-- Alerta de sucesso -->
    <div id="alerta-sucesso" class="alert alert-success text-center w-75 mx-auto d-none col-lg-8 mb-3" role="alert">
      ✅ Mensagem enviada com sucesso! Obrigado pelo contato.
    </div>

    <form id="formContato" action="https://formsubmit.co/joelmircarravetta@gmail.com" method="POST" class="w-75 mx-auto col-lg-8">
      <!-- Configurações ocultas -->
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_subject" value="Meu Portfólio">
      <input type="hidden" name="_template" value="box">

      <div class="col-lg-8 mb-3 mx-auto">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" required>
      </div>
      <div class="col-lg-8 mb-3 mx-auto">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="col-lg-8 mb-3 mx-auto">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea name="mensagem" class="form-control" id="mensagem" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-50 mx-auto d-block">Enviar</button>
    </form>
  </div>

  <script>
    // Exibe o alerta de sucesso sem sair da página
    document.getElementById("formContato").addEventListener("submit", function(e) {
      e.preventDefault(); // Impede o redirecionamento padrão
      const form = e.target;

      fetch(form.action, {
        method: "POST",
        body: new FormData(form)
      }).then(response => {
        if (response.ok) {
          document.getElementById("alerta-sucesso").classList.remove("d-none");
          form.reset();
        }
      }).catch(error => console.error('Erro:', error));
    });
  </script>

  </section>

  <!-- Footer -->
  <footer class="text-center py-4">
    <div class="footer-social">
     <a href="https://www.linkedin.com/in/joelmir-carravetta/" target="_blank" class="btn btn-outline-primary bi-linkedin"></a>
     <a href="https://www.instagram.com/joelmircarravetta/" target="_blank" class="btn btn-outline-primary bi-instagram"></a>
     <a href="https://wa.me/5551991250471" target="_blank" class="btn btn-outline-primary bi-whatsapp"></a>
    </div>
    <div class="footer-text">
      &copy; 2025 - Joelmir Carravetta Matthes | Feito em
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" width="25px" height="25px"> Bootstrap
    </div>
  </footer>
</div>

    <!-- popup Descrição do projetos -->
          <div class="overlay" id="overlay">

            <div class="popup" id="popup1">
              <h2>Meu Portfólio</h2>
              <br>
              <h3>Descrição:</h3>
              <p>O projeto Meu Portfólio foi desenvolvido com o objetivo de apresentar de forma profissional minhas informações pessoais, formação, habilidades e projetos na área de tecnologia. O site possui design moderno, responsivo e de fácil navegação, permitindo que recrutadores e visitantes conheçam meu trabalho e trajetória.</p>
              <br>
              <h3>Ferramentas utilizadas:</h3>
              <p>HTML5 e CSS3 para estrutura e estilização do site, Bootstrap 5 para responsividade e componentes visuais, JavaScript para pequenas interações e efeitos, e Canva para criação do logotipo e elementos gráficos.</p>
              <p>Objetivo de demonstrar minhas competências em desenvolvimento Front-End, aplicando boas práticas de estrutura, estilo e acessibilidade, além de destacar minha evolução profissional na área de tecnologia.</p>
              <button class="btn btn-outline-primary" onclick="fecharPopup()">Fechar</button>
            </div>

            <div class="popup" id="popup2">
              <h2>Genius Sonoro - Para deficientes visuais</h2>
              <br>
              <h3>Descrição:</h3>
              <p>O jogo Genius com quatro botões é um jogo de memória auditiva e sequencial, em que cada botão possui um som diferente e está localizado em um quadrante da tela. O botão do canto superior esquerdo emite o som DÓ, o superior direito emite RÉ, o inferior esquerdo emite MI e o inferior direito emite FA. O sistema gera automaticamente uma sequência de sons, e o jogador deve prestar atenção na ordem em que eles são apresentados para conseguir reproduzi-la corretamente.</p>
              <p>A cada rodada, o jogo toca a sequência completa de sons, e o jogador precisa repetir exatamente na mesma ordem utilizando os botões correspondentes. Se acertar, o jogo adiciona um novo som ao final da sequência e a reproduz novamente desde o início, tornando o desafio cada vez mais difícil.</p>
              <p>Se o jogador pressionar um botão diferente do esperado em qualquer momento da sequência, o jogo é encerrado imediatamente. O objetivo é memorizar e repetir corretamente o maior número possível de sons na ordem apresentada.</p>
              <p><a href="/storage/app/public/Genius_Sonoro.apk" target="_blank" class="btn btn-outline-primary">Baixar o jogo</a></p>
              <button class="btn btn-outline-primary" onclick="fecharPopup()">Fechar</button>
            </div>

            <div class="popup" id="popup3">
              <h2>Dolcezza - Doceria Artesanal</h2>
              <br>
              <h3>Descrição:</h3>
              <p>O projeto Dolcezza Doceria Artesanal é um site institucional desenvolvido para apresentar uma doceria artesanal, destacando seus produtos, história e diferenciais. O objetivo foi criar uma experiência visual agradável e moderna, transmitindo a essência artesanal e o cuidado com os detalhes da marca.</p>              <br>
              <h3>Ferramentas utilizadas:</h3>
              <p>Página inicial com destaque para produtos e identidade visual da marca, apresentando a história e o propósito da doceria, galeria de produtos com imagens e descrições.</p>
              <p>Voltado para uma experiência visual agradável e artesanal</p>
              <button class="btn btn-outline-primary" onclick="fecharPopup()">Fechar</button>
            </div>

            <script>
            function abrirPopup(id) {
              document.querySelectorAll('.popup').forEach(p => p.style.display = 'none');
              document.getElementById('overlay').classList.add('active');
              document.getElementById(id).style.display = 'block';
              document.getElementById('mainContent').classList.add('blurred');
              document.body.classList.add('popup-aberto'); // 🔹 bloqueia rolagem do fundo
            }

            function fecharPopup() {
              document.getElementById('overlay').classList.remove('active');
              document.querySelectorAll('.popup').forEach(p => p.style.display = 'none');
              document.getElementById('mainContent').classList.remove('blurred');
              document.body.classList.remove('popup-aberto'); // 🔹 libera rolagem novamente
            }
            </script>
          </div>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Smooth fade-in JS -->
  <script>
    const elementos = document.querySelectorAll('.fade-in');
    const aparece = () => {
      elementos.forEach(el => {
        const pos = el.getBoundingClientRect().top;
        if (pos < window.innerHeight - 100) el.classList.add('visible');
      });
    };
    window.addEventListener('scroll', aparece);
    window.addEventListener('load', aparece);
  </script>

  <script>
    // Fecha o menu quando clicar em um link do navbar
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
        bsCollapse.hide();
      });
    });
  </script>
</div>
</body>
</html>
