<x-layout titulo="Editar Perfil de Usuário">
	<nav class="navbar navbar-expand-lg sticky-top"
		style="background-color: #E5CD59; padding-top: 20px; padding-bottom: 20px;">
		<div class="container-fluid d-flex justify-content-between align-items-center">

			<!-- LOGO (Imagem responsiva) -->
			<a class="navbar-brand" href="usuarioHome">
				<img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
			</a>

			<!-- BOTÕES CENTRAIS -->
			<div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
				<ul class="navbar-nav d-flex flex-row gap-3">
					<li class="nav-item">
						<a href="usuarioHome" class="btn btn-danger"
							style="background-color: #E5CD59; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
					</li>
					<li class="nav-item">
						<a href="/usuarioSobrenos" class="btn btn-danger"
							style="background-color: #E5CD59; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
					</li>
					<li class="nav-item">
						<a href="/usuarioAtividades" class="btn btn-danger"
							style="background-color: #E5CD59; border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('usuariorelatorio') }}" class="btn btn-danger"
							style="background-color: #E5CD59; border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
					</li>
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
								<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
									class="bi bi-person-circle" viewBox="0 0 16 16" class="nav-link dropdown-toggle" href="#"
									role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 100px;">
									<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
									<path fill-rule="evenodd"
										d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
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

	<section class="py-5" style="padding-top: 80px;"> <!-- Ajuste o padding-top para evitar sobreposição -->
		<div class="container">
			<div class="row align-items-center">
				<form action="usuarioatualizar" method="get">
					@csrf

					<!-- Bloco de Perfil  -->
					<h2 style="text-align: center;">Editar Perfil de Usuário</h2>
					<div class="card"
						style="width:100%; border-color: #E5CD59; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
						<div class="card-body">
							<div class="row">

								<!-- Input nome -->
								<div class="col-md-6">
									<h3 style="text-align: center;">Novo Nome:</h3>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="nome" name="nome"
											placeholder="Digite seu nome"
											style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
											value="{{ $usuarios->nome }}">
										<label for="nome">Nome</label>
									</div>
								</div>

								<!-- Input sobrenome -->
								<div class="col-md-6">
									<h3 style="text-align: center;">Novo Sobrenome:</h3>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="sobrenome" name="sobrenome"
											placeholder="Digite seu sobrenome"
											style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
											value="{{ $usuarios->sobrenome }}">
										<label for="sobrenome">Sobrenome</label>
									</div>
								</div>

								<!-- Input e-mail -->
								<div class="col-md-6">
									<h3 style="text-align: center;">Novo E-mail:</h3>
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="email" name="email"
											placeholder="nome@exemplo.com"
											style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
											value="{{ $usuarios->email }}">
										<label for="email">E-mail</label>
									</div>
								</div>

								<!-- Input senha -->
								<div class="col-md-6">
									<h3 style="text-align: center;">Nova Senha:</h3>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="senha" name="senha" placeholder="Senha"
											style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
											value="{{ $usuarios->senha }}">
										<label for="senha">Senha</label>
									</div>
								</div>

								<!-- Input idade -->
								<div class="col-md-6">
									<h3 style="text-align: center;">Nova Idade:</h3>
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="idade" name="idade" placeholder="Idade"
											style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
											value="{{ $usuarios->idade }}">
										<label for="idade">Idade</label>
									</div>
								</div>


								<!-- Botão Editar -->
								<div class="col-12 d-flex justify-content-center" style="transform: translate(0px, -0px);">
									<a href="{{ route('usuarioperfil') }}"><button type="button" class="btn btn-danger"
											style="width: 100%; border-radius: 30px; font-size: 18px; padding: 12px 24px; background-color: #E5CD59; border-color: #E5CD59;">
											Voltar
										</button></a>

									<button type="submit" class="btn btn-danger"
										style="width: 12%; border-radius: 30px; font-size: 18px; padding: 12px 24px; margin-left: 20%; background-color: #E5CD59; border-color: #E5CD59;">
										Confirmar
									</button>
								</div>

							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>


	<!-- Footer remains unchanged -->
	<footer class="text-muted" style="background-color: #D3D3D3; width: 100%;">
		<div class="container py-5">
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
				<div class="col-12 col-md-4 mb-4" style="text-align: center;">
					<h6 class="text-uppercase fw-bold mb-3">Linkedin</h6>
					<div class="flex-column align-items-start text-center">
						<a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank"
							class="d-block text-decoration-none text-primary mb-2">
							<i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchsdasadadadsa
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