<x-layout titulo="Home Usuário">    
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #DA3E41; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/usuarioHome">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="usuarioHome" class="btn btn-danger" style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="usuarioSobrenos" class="btn btn-danger" style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="/usuarioAtividades" class="btn btn-danger" style="border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('usuariosloginrelatorio') }}" class="btn btn-danger" style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
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
                  <li><a class="dropdown-item" href="{{ route('usuarioperfil') }}">Perfil</a></li>
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
  <section class="py-5" style="padding-top: 80px;">
    <div class="container">
      <div class="row align-items-center">

        <!-- Texto à esquerda -->
        <div class="col-md-6">
          <h2 class="mb-4">Projeto GIMO</h2>
          <p>Como sabemos hoje vivemos em frente a uma tela, já que estamos na era da tecnologia, sendo assim todos estamos sujeitos a ficar horas em frente as telas de computadores e celulares, e isso não é diferente quando falamos de crianças nos dias atuais, pios hoje desde muito pequenos já se possuí acesso a um celular ou um computador, por diversos motivos, e a escola também já se introduz essas tecnologias nas escolas, iniciado nos anos 80, depois se popularizando em todas as escolas nos anos 90 (mais específico em 1997), possibilitando a pesquisa usando as maquinas na escola, e hoje com a crescente nos avanços da tecnologia e a implementação dessas na sociedade, incluindo nas escolas, crianças tem acesso as telas muito rápido, então, pensando nisso, pensamos em transformar isso em uma oportunidade de aprendizado, podendo ser usado de maneira responsável e incentivando o aprendizado e o estudo para todas as crianças.</p>
          <p>O projeto GIMO tem como objetivo a elaboração de um site que auxilia alunos de ensino primário em seu aprendizado na parte de alfabetização e conhecimentos, podendo ser uma ajuda para o professor em sala de aula, proporcionando uma aula mais interativa e chamativa para as crianças. Visando as crianças com dificuldade de aprendizado, por quaisquer motivos que sejam, queremos que todas tenham uma aula interessante e que seja divertido aprender, sendo assim, podendo se usar desse site para uma melhora no ambiente escolar para ser cada vez mais receptivo para o aprendizado que é tão importante na vida de um ser humano. </p>
        </div>

        <!-- Imagem à direita -->
        <div class="col-md-6 text-center">
          <img src="https://via.placeholder.com/500x300" alt="Imagem ilustrativa" class="img-fluid rounded">
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
