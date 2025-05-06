<x-layout titulo="Alterar Senha de Professor">    

  <nav class="navbar navbar-expand-lg" style="background-color:rgb(245, 101, 58); padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÃO LOGIN -->
      <form class="d-flex" role="search">
        <a class="btn" style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 130px; text-align: center; color:  rgb(245, 140, 109);">PROFESSOR</a>
      </form>

    </div>
  </nav>

  <!-- Título Cadastro -->
   
  <br>
  <h2 class="card-title" style="text-align: center;">Alterar Senha</h2>
  <br>

  <div class="card" style="width: 50%; border-color:rgb(245, 140, 109); border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
    <div class="card-body">

      <!-- Formulário de alteração de senha -->
      <form action="" method="GET"> {{-- Ajuste a rota conforme necessário --}}

        <h3 style="text-align: center;">Nova Senha</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a nova senha" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
          <label for="senha">Senha</label>
        </div>
        <br>

        <!-- Botão Cadastrar -->
        <div>
          <button type="submit" class="btn btn-primary" style="background-color: white; color: rgb(245, 140, 109); border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 17px; margin: auto; width: 20%;">Confirmar</button>
        </div>
        <br>

      </form>

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
