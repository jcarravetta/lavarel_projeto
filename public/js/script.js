//
document.addEventListener("DOMContentLoaded", () => {
  // 1. GERENCIAMENTO DOS POPUPS
  // Função global para abrir o popup correspondente
  window.abrirPopup = (idPopup) => {
    const popup = document.getElementById(idPopup);
    if (popup) {
      popup.style.display = "flex";
      document.body.style.overflow = "hidden"; // Trava o scroll da página de fundo
    }
  };

  // Função global para fechar o popup correspondente
  window.fecharPopup = (idPopup) => {
    const popup = document.getElementById(idPopup);
    if (popup) {
      popup.style.display = "none";
      document.body.style.overflow = "auto"; // Reativa o scroll da página
    }
  };

  // Fecha o popup se o usuário clicar fora da caixa de conteúdo
  window.addEventListener("click", (event) => {
    if (event.target.classList.contains("popup-wrapper")) {
      event.target.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });


  // 2. FECHAMENTO AUTOMÁTICO DO MENU MOBILE (BOOTSTRAP)
  const linksMenu = document.querySelectorAll(".navbar-nav .nav-link");
  const navbarCollapse = document.getElementById("menu");

  if (navbarCollapse) {
    linksMenu.forEach((link) => {
      link.addEventListener("click", () => {
        // Verifica se o menu sanduíche está aberto e visível antes de fechar
        if (navbarCollapse.classList.contains("show")) {
          const seletorBotao = document.querySelector(".navbar-toggler");
          seletorBotao.click();
        }
      });
    });
  }


  // 3. ANIMAÇÃO DE FADE-IN COM O SCROLL (INTERSECTION OBSERVER)
  const elementosFade = document.querySelectorAll(".fade-in");

  const opcoesObservador = {
    root: null, // Usa a viewport do navegador
    threshold: 0.15, // Ativa quando 15% do elemento estiver visível
  };

  const observadorScroll = new IntersectionObserver((entradas, observador) => {
    entradas.forEach((entrada) => {
      if (entrada.isIntersecting) {
        entrada.target.classList.add("visible");
        observador.unobserve(entrada.target); // Para de observar após animar
      }
    });
  }, opcoesObservador);

  elementosFade.forEach((elemento) => {
    observadorScroll.observe(elemento);
  });
});
