<x-layout titulo="Home Administrador">
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color:rgb(245, 101, 58); padding-top: 17px; padding-bottom: 17px;">
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


  <h1 style="text-align: center; margin-top: 2%;">Estatísticas dos Usuários</h1>
    <section class="py-5" style="padding-top: 80px; text-align: center; height: 80vh;">
        <div style="float:left; border-style: solid; border-width: 2px; border-color: rgb(245, 101, 58); width: 90%; height: 80%; margin-left: 5%; overflow: auto;">
            @csrf 
                        
            <table class="table" style="height: 70%;">
                <thead>
                    <tr>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Nome</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Sobrenome</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">E-mail</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Idade</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Escola</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Série</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão A</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão B</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão C</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão D</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão E</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão F</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão G</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão H</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão I</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão J</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão K</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão L</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão M</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão N</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão O</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão P</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão Q</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão R</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão S</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão T</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão U</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão V</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão W</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão X</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão Y</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão Z</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 0</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 1</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 2</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 3</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 4</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 5</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 6</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 7</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 8</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 9</th>
                        <th style="border-style: solid; border-width: 2px; font-size: 18px;">Botão 10</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($turmas as $turma)
                        <tr>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->nome}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->sobrenome}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->email}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->idade}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->escola}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->serie}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoA}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoB}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoC}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoD}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoE}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoF}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoG}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoH}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoI}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoJ}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoK}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoL}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoM}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoN}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoO}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoP}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoQ}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoR}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoS}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoT}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoU}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoV}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoW}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoX}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoY}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botaoZ}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao0}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao1}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao2}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao3}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao4}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao5}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao6}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao7}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao8}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao9}}</th>
                            <th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$turma->botao10}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </di>
    </section>
  

<!-- Footer -->
<footer class="text-muted" style="background-color: #D3D3D3; width: 100%; padding-top: 17px; padding-bottom: 17px;">
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
              <a href="https://www.linkedin.com/in/gisele-da-hora-silva-0313811a9/" target="_blank" class="text-decoration-none text-primary mb-2">
                <i class="fab fa-linkedin me-2"></i>Gisele da Hora
              </a>
              <a href="https://www.linkedin.com/in/isaac-sena-74ab56224/" target="_blank" class="text-decoration-none text-primary mb-2">
                <i class="fab fa-linkedin me-2"></i>Isaac Sena
              </a>
              <a href="https://www.linkedin.com/in/mateus-albuquerque-pavani-934598267/" target="_blank" class="text-decoration-none text-primary mb-2">
                <i class="fab fa-linkedin me-2"></i>Mateus Pavani
              </a>
              <a href="https://www.linkedin.com/in/ot%C3%A1vio-fidalgo-8448a1217/" target="_blank" class="text-decoration-none text-primary mb-2">
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
