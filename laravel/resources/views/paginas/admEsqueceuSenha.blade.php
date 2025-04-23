<x-layout titulo="admCadastro">    

  <nav class="navbar navbar-expand-lg" style="background-color: #BDBDBD; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO -->
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÃO ADMINISTRADOR -->
      <form class="d-flex" role="search">
        <a class="btn ms-2"
          style="background-color: white; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 190px; text-align: center; color: #000000;">
          ADMINISTRADOR
        </a>
      </form>

    </div>
  </nav>

  <!-- TÍTULO -->
  <br>
  <h2 class="card-title" style="text-align: center;">Validar Chave de Acesso</h2>
  <br>

  <div class="card" style="width: 50%; border-color: #BDBDBD; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
    <div class="card-body">

      <form action="" method="GET"> <!-- Altere o action se precisar -->

        <!-- E-mail -->
        <h3 style="text-align: center;">E-mail:</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required
            style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
          <label for="email">E-mail</label>
        </div>
        <br>

        <!-- Chave de Acesso -->
        <h3 style="text-align: center;">Chave de Acesso:</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="chaveAcesso" name="chaveAcesso" placeholder="Digite a chave" required
            style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
          <label for="chaveAcesso">Chave de Acesso</label>
        </div>
        <br>

        <!-- Botão Confirmar -->
        <div>
          <button type="submit" class="btn btn-primary"
            style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 20%;">
            Confirmar
          </button>
        </div>
        <br>

      </form>

    </div>
  </div>

</x-layout>
