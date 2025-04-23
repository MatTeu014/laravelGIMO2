<x-layout titulo="Alfabeto Usuário">    
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #4782DA; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/usuarioHome">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="/usuarioHome" class="btn btn-danger" style=" background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="usuarioSobrenos" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="usuarioAtividades" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
          </li>
          <li class="nav-item">
            <a href="usuarioRelatorio" class="btn btn-danger" style="background-color: #4782DA; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
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
                  <li><a class="dropdown-item" href="/usuarioPerfil">Perfil</a></li>
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
  <section class="py-5" style="padding-top: 80px; text-align: center;">
    <div class="container" style="margin: auto;">
      
      <div class="row row-cols-1 row-cols-md-5 g-4">
        
        <div class="col">
          <div class="card">
            <a href="letraA"><div class="card-body">
              <img href="" src="{{URL::to('/assets/img/letraA_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">
            </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
          <a href="letraB"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraB_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">
            </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraC"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraC_3.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraD"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraD_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraE"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraE_6.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraF"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraF_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraG"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraG_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraH"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraH_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraI"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraI_3.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraJ"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraJ_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraK"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraK_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraL"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraL_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraM"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraM_6.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraN"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraN_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraO"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraO_3.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraP"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraP_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraQ"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraQ_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraR"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraR_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraS"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraS_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraT"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraT_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraU"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraU_3.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraV"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraV_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>

        </div>

        <div class="col">
          <div class="card">
            <a href="letraW"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraW_6.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraX"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraX_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraY"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraY_4.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <a href="letraZ"><div class="card-body">
            <img href="" src="{{URL::to('/assets/img/letraZ_5.png')}}" class="card-img-top" alt="..." style="width: 120px;">            
          </div></a>
          </div>
        </div>

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
