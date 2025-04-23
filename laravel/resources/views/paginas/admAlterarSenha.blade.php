<x-layout titulo="Alterar Senha de Administrador">    

<nav class="navbar navbar-expand-lg" style="background-color: #BDBDBD; padding-top: 20px; padding-bottom: 20px;">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- LOGO (Imagem responsiva) -->
    <a class="navbar-brand" href="/">
      <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
    </a>

    <!-- BOTÕES DIREITA (USUÁRIO E ADM COM LINKS) -->
    <form class="d-flex" role="search">
      <a class="btn ms-2"
        style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 190px; text-align: center; color: #000000;">ADMINISTRADOR</a>
    </form>

  </div>
</nav>

<!-- Titulo Cadastro -->
<br>
<h2 class="card-title" style="text-align: center;">Alterar Senha</h2>
<br>

<div class="card" style="width:50%; border-color: #BDBDBD; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">

  <div class="card-body">
    <!-- Formulário de alteração de senha -->
    <form action="" method="get"> {{-- Ajuste a rota conforme necessário --}}
      @csrf

      <!-- Input nova senha -->  
      <h3 style="text-align: center;">Nova Senha:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a nova senha" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="senha">Nova Senha</label>
      </div>
      <br>

      <!-- Botão Confirmar -->
      <div>
        <button type="submit" class="btn btn-primary" style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 20%;">Confirmar</button>
      </div>
      <br>

    </form>
  </div>
</div> 

</x-layout>
