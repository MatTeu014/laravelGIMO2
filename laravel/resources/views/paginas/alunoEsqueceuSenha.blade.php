<x-layout titulo="Cadastro de Usuário">    

  <nav class="navbar navbar-expand-lg" style="background-color: #f5e177; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO -->
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÃO LOGIN -->
      <form class="d-flex" role="search" method="GET" action="/alunoLogin">
        <button type="submit" class="btn"
          style="background-color: white; border: 0px; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #E5CD59;">
          LOGIN
        </button>
      </form>

    </div>
  </nav>

  <!-- TÍTULO -->
  <br>
  <h2 class="card-title" style="text-align: center;">Validar Chave de Acesso</h2>
  <br>

  <div class="card" style="width: 50%; border-color: #f5e177; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
    <div class="card-body">

      <form method="GET" action="">
        <!-- E-MAIL -->
        <h3 style="text-align: center;">E-mail:</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required
            style="border: 2px solid #000000; border-radius: 26px;">
          <label for="email">E-mail</label>
        </div>
        <br>

        <!-- CHAVE DE ACESSO -->
        <h3 style="text-align: center;">Chave de Acesso:</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="chave" name="chave" placeholder="Chave de acesso" required
            style="border: 2px solid #000000; border-radius: 26px;">
          <label for="chave">Chave de Acesso</label>
        </div>
        <br>

        <!-- BOTÃO CADASTRAR -->
        <div>
          <button type="submit" class="btn btn-primary"
            style="background-color: white; color: #f5e177; border: 2px solid #000000; border-radius: 30px; font-weight: bold; font-size: 17px; margin: auto; width: 20%;">
            Cadastrar
          </button>
        </div>
      </form>

      <br>
    </div>
  </div> 

</x-layout>
