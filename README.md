# 🚀 Meu Portfólio Profissional — Joelmir Matthes Carravetta

Este é o repositório do meu portfólio web profissional desenvolvido em **Laravel** e **Bootstrap 5**. O objetivo desta aplicação é centralizar a gestão estratégica da minha trajetória profissional, exibindo de forma limpa meus projetos de TI, competências técnicas e certificações adquiridas.

---

## 🛠️ Tecnologias e Ferramentas Utilizadas

### **Front-End**
* **HTML5 & CSS3** — Estruturação semântica e estilização customizada.
* **Bootstrap 5 & Bootstrap Icons** — Framework responsivo para design mobile-first rápido e fluido.
* **JavaScript (ES6+)** — Manipulação dinâmica do DOM para controle de modais (popups) e efeitos de animação com *Intersection Observer*.
* **Vite** — Build tool moderna para compilação e otimização dos assets.

### **Back-End & Infraestrutura**
* **Laravel (PHP)** — Framework robusto utilizado para o ecossistema de rotas e segurança no download de arquivos.
* **Blade Engine** — Motor de templates nativo do Laravel para modularização do HTML e injeção dinâmica de caminhos (`{{ asset() }}`).

---

## 📦 Projetos Destacados no Portfólio

1. **Sistema Web Meu Portfólio**
   * Aplicação desenvolvida para gerenciar e apresentar estrategicamente projetos e conquistas na área de tecnologia.
2. **Genius Sonoro (Acessibilidade)**
   * Projeto mobile focado em acessibilidade para deficientes visuais criado no MIT App Inventor.
   * **Diferencial:** Integra uma rota interna segura do Laravel que força o cabeçalho correto (`application/vnd.android.package-archive`) para o download direto do instalador `.apk`.
3. **Dolcezza — Dolceria Artesanal**
   * Criação e desenvolvimento da identidade visual completa, paleta de cores corporativa e peças gráficas promocionais da marca.

---

## ⚙️ Como Executar o Projeto Localmente

Certifique-se de ter o **PHP 8.2+**, **Composer** e **Node.js** instalados em sua máquina.

### 1. Clonar o repositório
```bash
git clone https://github.com
cd seu-repositorio
```

### 2. Instalar as dependências do Back-End
```bash
composer install
```

### 3. Configurar as variáveis de ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar a pasta de downloads públicos (Para o APK)
Mova o arquivo `aplicativo.apk` para `storage/app/public/` e gere o link simbólico:
```bash
php artisan storage:link
```

### 5. Instalar e compilar as dependências de Front-End (Vite)
```bash
npm install
npm run build
```

### 6. Iniciar o servidor local
```bash
php artisan serve
```
Acesse o projeto no navegador através do endereço: `http://127.0.0.1:8000`

---

## 📇 Contato e Redes Profissionais

* **LinkedIn:** [in/joelmir-carravetta](https://linkedin.com)
* **Instagram:** [@joelmircarravetta](https://instagram.com)
* **WhatsApp:** [+55 (51) 99125-0471](https://wa.me)
* **Website Oficial:** [joelmircarravetta.free.nf](https://free.nf)
