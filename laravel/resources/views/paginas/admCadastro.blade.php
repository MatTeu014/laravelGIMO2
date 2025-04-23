<x-layout titulo="Cadastro de Administrador">    

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background-color: #BDBDBD; padding-top: 20px; padding-bottom: 20px;">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- LOGO (Imagem responsiva) -->
    <a class="navbar-brand" href="/admHome">
      <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
    </a>

    <!-- BOTÃO ADMINISTRADOR -->
    <form class="d-flex" role="search">
      <a class="btn ms-2"
        style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 190px; text-align: center; color: #000000;">ADMINISTRADOR</a>
    </form>

  </div>
</nav>

<!-- Título Cadastro -->
<br>
<h2 class="card-title" style="text-align: center;">Cadastro de Administrador</h2>
<br>

<div class="card" style="width: 50%; border-color: #BDBDBD; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
  <div class="card-body">
  @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if (session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
    @endif
    <form action="/admscadastrar" method="GET"> 
    
      <!-- Input Nome -->  
      <h3 style="text-align: center;">Nome:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="nome">Nome</label>
      </div>
      <br>
      
      <!-- Input Sobrenome -->
      <h3 style="text-align: center;">Sobrenome:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="sobrenome">Sobrenome</label>
      </div>
      <br>

      <!-- Input E-mail -->
      <h3 style="text-align: center;">E-mail:</h3>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="email">E-mail</label>
      </div>
      <br>

      <!-- Input Senha -->
      <h3 style="text-align: center;">Senha:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="senha">Senha</label>
      </div>
      <br>

      <!-- Input Idade -->
      <h3 style="text-align: center;">Idade:</h3>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite a idade" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="idade">Idade</label>
      </div>
      <br>
      <br>

      <!-- Botão Cadastrar/Voltar -->
      <div style="float: right;">
        <button type="submit" class="btn btn-primary" style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 100%;">Cadastrar</button>
      </div>
      
    </form>
    <div style="float: left;">
      <a href="admHome"><button type="submit" class="btn btn-primary" style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 100%;">Voltar</button></a>
    </div>
  </div>

</div> 
<br><br>

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
