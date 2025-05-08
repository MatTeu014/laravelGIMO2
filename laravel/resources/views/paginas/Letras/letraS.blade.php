<x-layout titulo="Letra S">    
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #4782DA; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/alunoHome">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="alunoHome" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="alunoSobrenos" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="/alunoAtividades" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('alunosrelatorio') }}" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
          </li>
        </ul>
      </div>

      <!-- BOTÕES DIREITA (USUÁRIO) -->
      <form class="d-flex" role="search">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 100px;">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('alunosperfil') }}">Perfil</a></li>
                  <li><a class="dropdown-item" href="/">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </nav>

    <!-- Seção de Conteúdo -->

    <div class="container" style="margin-top: 2%; margin-bottom: 2%; height: 35%; width: 35%; border: 2px solid black;">
            <div class="row align-items-center">

            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-dimensions" data-bs-wrap="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{URL::to('/assets/img/letraS.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{URL::to('/assets/img/letraS_2.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{URL::to('/assets/img/letraS_3.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{URL::to('/assets/img/letraS_4.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <form method="post" action="{{ route('alunoaumentarprogressoletras') }}">
        @csrf
        <div style="position: relative;">
            <img src="{{ URL::to('/assets/img/finalS.png') }}" class="d-block w-100" alt="...">
            <button @if(session('alunos')->botaoS) disabled @endif type="submit" style="
                background-color: #4782DA;
                border: 2px solid black;
                border-radius: 30px;
                padding: 12px 24px;
                font-size: 18px;
                text-align: center;
                position: absolute;
                top: 85%;
                left: 50%;
                transform: translate(-50%, -50%);
            ">
                Finalizar
            </button>
        </div>
        </form>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

            </div>
        </div>

  <!-- Footer -->
  <footer class="text-muted" style="background-color: #D3D3D3; width: 100%; padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Projeto GIMO -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Projeto GIMO Desenvolvido por:</h6>
          <div class="d-flex flex-column align-items-start">
            <p class="mb-2">Gisele da Hora Silva</p>
            <p class="mb-2">Isaac Sena Martins</p>
            <p class="mb-2">Mateus Albuquerque Pavani</p>
            <p class="mb-2">Otávio Fidalgo</p>
          </div>
        </div>

        <!-- LinkedIn (corrigido) -->
        <div class="col-12 col-md-4 mb-4" style="text-align: center;">
          <h6 class="text-uppercase fw-bold mb-3">LinkedIn</h6>
          <div class="d-flex flex-column align-items-center">
            <a href="https://www.linkedin.com/in/giseledahora" target="_blank" class="text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>Gisele da Hora
            </a>
            <a href="https://www.linkedin.com/in/isaacsena" target="_blank" class="text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>Isaac Sena
            </a>
            <a href="https://www.linkedin.com/in/mateuspavani" target="_blank" class="text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>Mateus Pavani
            </a>
            <a href="https://www.linkedin.com/in/otaviofidalgo" target="_blank" class="text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>Otávio Fidalgo
            </a>
          </div>
        </div>

        <!-- Contato -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Contato</h6>
          <p><i class="fas fa-envelope me-2"></i>gimo.projeto@email.com</p>
          <p><i class="fas fa-phone me-2"></i>(11) 12345-6789</p>
          <p><i class="fas fa-map-marker-alt me-2"></i>Senac - SBC, Brasil</p>
        </div>
      </div>

      <!-- Redes Sociais - Siga-nos (centralizado) -->
      <div class="row">
        <div class="col-12 text-center mt-4">
          <h6 class="text-uppercase fw-bold mb-3">Redes Sociais</h6>
          <a href="https://www.linkedin.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-linkedin fa-lg"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a href="https://www.github.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-github fa-lg"></i>
          </a>
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
