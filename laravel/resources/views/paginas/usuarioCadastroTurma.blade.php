<x-layout titulo="Cadastro de Turma de Usuário">

	<nav class="navbar navbar-expand-lg" style="background-color: #f5e177; padding-top: 20px; padding-bottom: 20px;">
		<div class="container-fluid d-flex justify-content-between align-items-center">

			<!-- LOGO -->
			<a class="navbar-brand" href="/">
				<img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
			</a>

			<!-- BOTÃO LOGIN -->
			<form class="d-flex" role="search">
				<a href="usuarioLogin" class="btn"
					style="background-color: white; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #E5CD59;">LOGIN</a>
			</form>

		</div>
	</nav>

	<!-- TÍTULO -->
	<br>
	<h2 class="card-title" style="text-align: center;">Em qual Turma você está matriculado?</h2>
	<br>

	<div class="card"
		style="width: 50%; border-color: #f5e177; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
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
			<form action="/usuarioscadastrarturma" method="GET"> <!-- Ajuste o action se necessário -->

				<!-- Turma -->
				<h3 style="text-align: center;">Série:</h3>
				<select class="form-select" id="turma" name="turma" required
					style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
					<option selected disabled>Escolha a Turma</option>
					@foreach ($turmas as $turma)
						<option>{{ $turma-> nome }}</option>
					@endforeach
				</select>
				<br><br> 

				<!-- Botão Cadastrar -->
				<div>
					<button type="submit" class="btn btn-primary"
						style="background-color: white; color: #E5CD59; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 17px; width: 20%;">Cadastrar</button>
				</div>
				<br>

			</form>
		</div>

	</div>
	<br>

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
				<div class="col-12 col-md-4 mb-4">
					<h6 class="text-uppercase fw-bold mb-3">Linkedin</h6>
					<div class="flex-column align-items-start text-center">
						<a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank"
							class="d-block text-decoration-none text-primary mb-2">
							<i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchsdasadadadsa
						</a>
						<a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank"
							class="d-block text-decoration-none text-primary mb-2">
							<i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchsdasdaasdadas
						</a>
						<a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank"
							class="d-block text-decoration-none text-primary mb-2">
							<i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchasdadsadsdasd
						</a>
						<a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank"
							class="d-block text-decoration-none text-primary mb-2">
							<i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchasdadasdsadad
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


</x-layout>