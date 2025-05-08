<x-layout titulo="Sobre-Nós">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #DA3E41; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      
      <!-- LOGO -->
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="/" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="/sobrenos" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="/alunoLogin" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
          </li>
          <li class="nav-item">
            <a href="/alunoLogin" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
          </li>
        </ul>
      </div>

      <!-- LOGIN / ADM -->
      <form class="d-flex" role="search">
        <a href="/alunoLogin" class="btn" style="background-color: white; border-radius: 30px; padding: 6px 17px; font-size: 19px; color: #DA3E41;">Login</a>
        <a href="/admLogin" class="btn ms-2" style="background-color: white; border-radius: 30px; padding: 6px 18px; font-size: 20px; color: #DA3E41;">Adm</a>
      </form>
    </div>
  </nav>

  <!-- CARDS ALINHADOS -->
  <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
      <img src="{{URL::to('/assets/img/gisele.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gisele da Hora Silva</h5>
        <p class="card-text">•	18 anos;</p>
        <p class="card-text">•	Formanda de Técnico de Informática no Senac de São Bernardo do Campo;</p>
        <p class="card-text">•	Estudante de bacharelado em Ciências da computação no Senac Santo Amaro.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{URL::to('/assets/img/isaac.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Isaac Sena Martins</h5>
        <p class="card-text">•	22 anos;</p>
        <p class="card-text">•	Formando de Técnico de Informática no Senac de São Bernardo do Campo;</p>
        <p class="card-text">•	Possuí experiencia em sistema de Banco de Dados (SISQUAL).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{URL::to('/assets/img/mateus.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mateus Albuquerque Pavani</h5>
        <p class="card-text">•	20 anos;</p>
        <p class="card-text">•	Formando de Técnico de Informática no Senac de São Bernardo do Campo;</p>
        <p class="card-text">•	Formado em cursos rápidos em manutenção de computadores e redes pelo Senai;</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{URL::to('/assets/img/otavio.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Otávio Fidalgo</h5>
        <p class="card-text">•	22 anos;</p>
        <p class="card-text">•	Formado em curso superior em Fotografia pela Universidade Paulista;</p>
        <p class="card-text">•	Especializado em Fotografia Gastronômica;</p>
        <p class="card-text">•	Formando em Técnico de Informática no Senac São Bernardo do Campo;</p>
        <p class="card-text">•	Experiente em organização de Eventos e em estoques;</p>
        <p class="card-text">•	Experiente em correção de textos, documentos e roteirização;</p>
        <p class="card-text">•	Experiencia em direção de arte e fotografia.</p>
      </div>
    </div>
  </div>
</div>

   <!-- Footer centralizado -->
   <footer class="text-muted" style="background-color: #D3D3D3; width: 100%;">
    <div class="container py-5">
      <div class="row text-center justify-content-center">

        <!-- Projeto GIMO -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Projeto GIMO Desenvolvido por:</h6>
          <div class="d-flex flex-column align-items-center">
            <p class="mb-2">Gisele da Hora Silva</p>
            <p class="mb-2">Isaac Sena Martins</p>
            <p class="mb-2">Mateus Albuquerque Pavani</p>
            <p class="mb-2">Otávio Fidalgo</p>
          </div>
        </div>

        <!-- LinkedIn centralizado e alinhado -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">LinkedIn</h6>
          <div class="d-flex flex-column align-items-center">
            <a href="https://www.linkedin.com/in/gisele-da-hora-silva-0313811a9/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Gisele da Hora</span>
            </a>
            <a href="https://www.linkedin.com/in/isaac-sena-74ab56224/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Isaac Sena</span>
            </a>
            <a href="https://www.linkedin.com/in/mateus-albuquerque-pavani-934598267/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Mateus Pavani</span>
            </a>
            <a href="https://www.linkedin.com/in/ot%C3%A1vio-fidalgo-8448a1217/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Otávio Fidalgo</span>
            </a>
          </div>
        </div>

        <!-- Contato e Redes Sociais centralizados -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Contato</h6>
          <div class="d-flex flex-column align-items-center">
            <p><i class="fas fa-envelope me-2" style="color: #000;"></i>gimo.projeto@email.com</p>
            <p><i class="fas fa-map-marker-alt me-2" style="color: #000;"></i>Senac - SBC, Brasil</p>
            <a href="https://www.instagram.com" target="_blank" class="text-reset d-flex align-items-center">
              <i class="fab fa-instagram fa-lg me-2" style="color: #000;"></i><span>Instagram</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Direitos Autorais -->
      <div class="row">
        <div class="col-12 text-center mt-4">
          <p class="mb-0">&copy; 2025 Projeto GIMO. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- FontAwesome (caso ainda não esteja incluído) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
</x-layout>
