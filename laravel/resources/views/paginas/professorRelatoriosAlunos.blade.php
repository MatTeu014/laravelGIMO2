<x-layout titulo="Home Administrador">
	<nav class="navbar navbar-expand-lg sticky-top"
		style="background-color:rgb(245, 101, 58); padding-top: 17px; padding-bottom: 17px;">
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
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
									class="bi bi-person-circle" viewBox="0 0 16 16" class="nav-link dropdown-toggle"
									href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
									style="margin-right: 100px;">
									<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
									<path fill-rule="evenodd"
										d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
								</svg>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{ route('professorperfil') }}">Perfil</a></li>
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
		<div
			style="float:left; border-style: solid; border-width: 2px; border-color: rgb(245, 101, 58); width: 90%; height: 80%; margin-left: 5%; overflow: auto;">
			@csrf

			<table class="table" style="height: 70%;">
				<thead>
					<tr>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Nome</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Sobrenome</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">E-mail</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Idade</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra A</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra B</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra C</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra D</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra E</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra F</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra G</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra H</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra I</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra J</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra K</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra L</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra M</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra N</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra O</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra P</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra Q</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra R</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra S</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra T</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra U</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra V</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra W</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra X</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra Y</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Letra Z</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 0</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 1</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 2</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 3</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 4</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 5</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 6</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 7</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 8</th>
						<th style="border-style: solid; border-width: 2px; font-size: 18px;">Número 9</th>
						<th style="border-style: solid; border-width: 2px; font-size: 17px;">Número 10</th>
					</tr>
				</thead>

				<tbody>
					@foreach($alunos as $aluno)
						<tr>
							<th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$aluno->nome}}</th>
							<th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$aluno->sobrenome}}</th>
							<th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$aluno->email}}</th>
							<th style="border-style: solid; border-width: 2px; font-size: 17px;">{{$aluno->idade}}</th>
							@if ( $aluno->botaoA  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoA  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoB  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoB  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoC  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoC  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoD  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoD  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoE  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoE  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoF  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoF  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoG  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoG  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoH  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoH  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoI  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoI  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoJ  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoJ  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoK  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoK  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoL  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoL  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoM  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoM  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoN  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoN  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoO  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoO  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoP  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoP  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoQ  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoQ  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoR  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoR  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoS  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoS  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoT  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoT  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoU  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoU  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoV  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoV  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoW  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoW  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoX  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoX  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoY  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoY  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botaoZ  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botaoZ  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao0  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao0  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao1  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao1  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao2  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao2  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao3  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao3  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao4  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao4  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao5  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao5  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao6  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao6  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao7  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao7  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao8  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao8  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao9  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao9  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
							@if ( $aluno->botao10  == 0)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Incompleto</th>
								@elseif ( $aluno->botao10  == 1)
								<th style="border-style: solid; border-width: 2px; font-size: 17px;">Completo</th>
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
			</di>
	</section>


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