<x-layout titulo="Home Escola">
	<nav class="navbar navbar-expand-lg sticky-top"
		style="background-color: rgb(119, 81, 31); padding-top: 20px; padding-bottom: 20px;">
		<div class="container-fluid d-flex justify-content-between align-items-center">

			<!-- LOGO (Imagem responsiva) -->
			<a class="navbar-brand" href="escolaHome">
				<img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
			</a>

			<!-- BOTÕES CENTRAIS -->
			<div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
				<ul class="navbar-nav d-flex flex-row gap-3">

					<li class="nav-item">

						<a href="/escolaHome" class="btn btn-danger" style=" background-color: rgb(155, 109, 50); border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
						<a href="/escolaCadastroSeries" class="btn btn-danger" style=" background-color: rgb(155, 109, 50); border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Séries</a>
						<a href="seriesconsultar" class="btn btn-danger" style=" background-color: rgb(155, 109, 50); border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Turmas</a>

						
					</li>
					<div class="dropdown ms-2">
						<button class="btn dropdown-toggle"
							style="background-color: rgb(155, 109, 50); border: 2px solid black; border-radius: 30px; padding: 6px 10px; font-size: 19px; width: 100%; text-align: center; color: white;"
							type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
							Professor
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" href="professorCadastro">Cadastro</a></li>
							<li><a class="dropdown-item" href="professorconsultarprofessores">Séries e Turmas</a></li>
						</ul>
					</div>
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
									<li><a class="dropdown-item" href="escolasperfil">Perfil</a></li>
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

				<!-- Texto à esquerda -->
				<div class="col-md-6">
					<h2 class="mb-4">Escola</h2>
					<p>
						• Bem-Vindo a área de registro de escolas.
					</p>
					<p>
						• Aqui poderá ser cadastrada as séries e turmas de cada escola cadastrada no sistema,
						possibilitando uma melhor compreensão e organização das mesmas, assim podendo ter um maior
						rendimento nas atividades com os alunos.
					</p>
					<p>
						• Fique atendo ao criar as series e turmas, sempre colocando o nome das turmas corretamente, e
						sempre verificando suas séries, para não ter nenhum tipo de conflito na hora das execuções das
						aulas.
					</p>

				</div>

				<!-- Imagem à direita -->
				<div class="col-md-6 text-center">
					<img src="{{URL::to('/assets/img/escola.png')}}" alt="Imagem ilustrativa" class="img-fluid rounded">
				</div>

			</div>
		</div>
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
						<a href="https://www.instagram.com" target="_blank"
							class="text-reset d-flex align-items-center">
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