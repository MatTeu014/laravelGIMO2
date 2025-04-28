<x-layout titulo="Home Administrador">
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color:rgb(245, 101, 58); padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/professorHome">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
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
                  <li><a  class="dropdown-item" href="{{ route('professorperfil') }}">Perfil</a></li>
                  <li><a class="dropdown-item" href="/">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <h1 style="text-align: center; margin-top: 2%;">Escolha uma turma</h1>

  <section class="py-5" style="padding-top: 80px; text-align: center;">
        <div class="container" style="margin: auto;">
            <div class="row align-items-center">

                <form action="professorturmas" method="get">

                <div class="container" style="margin: auto;">
                    <div class="row align-items-center">

                <div class="card" style="width: 24rem; height: 35vh; border-color: white;">
                    <div class="card-body">
                        <a href="professorSerie1"><button value="Turma 1" style="font-size: 50px; border-radius: 30px; border-color: rgb(245, 101, 58); border-style: solid; background-color: white;">Turma 1</button></a>
                    </div>
                </div>
                
                <div class="card" style="width: 24rem; height: 35vh; border-color: white;">
                  <div class="card-body">
                    <a href="usuarioNumeros"><button value="Turma 2" style="font-size: 50px; border-radius: 30px; border-color: rgb(245, 101, 58); border-style: solid; background-color: white;">Turma 2</button></a>
                  </div>
                </div>

                <div class="card" style="width: 24rem; height: 35vh; border-color: white;">
                  <div class="card-body">
                    <a href="usuarioNumeros"><button value="Turma 3" style="font-size: 50px; border-radius: 30px; border-color: rgb(245, 101, 58); border-style: solid; background-color: white;">Turma 3</button></a>
                  </div>
                </div>

                <div class="card" style="width: 24rem; height: 35vh; border-color: white;">
                  <div class="card-body">
                    <a href="usuarioNumeros"><button value="Turma 4" style="font-size: 50px; border-radius: 30px; border-color: rgb(245, 101, 58); border-style: solid; background-color: white;">Turma 4</button></a>
                  </div>
                </div>
            </div>
        </div>

                </form>

            </div>
        </div>
    </section>
  

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

      <!-- Redes Sociais / Link da equipe -->
      <div class="col-12 col-md-4 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">LinkedIn</h6>
        <div class="flex-column align-items-start text-center">
          <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
            <i class="fab fa-linkedin me-2"></i>Perfil 1
          </a>
          <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
            <i class="fab fa-linkedin me-2"></i>Perfil 2
          </a>
          <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
            <i class="fab fa-linkedin me-2"></i>Perfil 3
          </a>
          <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
            <i class="fab fa-linkedin me-2"></i>Perfil 4
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
