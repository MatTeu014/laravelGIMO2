<x-layout titulo="Cadastro de Turmas">

    <nav class="navbar navbar-expand-lg"
        style="background-color:rgb(119, 81, 31); padding-top: 20px; padding-bottom: 20px;">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <!-- LOGO -->
            <a class="navbar-brand" href="escolaHome">
                <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
            </a>

            <!-- BOTÃO LOGIN -->
            <form class="d-flex" role="search">
                <a href="escolaLogin" class="btn"
                    style="background-color: white; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #E5CD59;">LOGIN</a>
            </form>

        </div>
    </nav>

    <!-- TÍTULO -->
    <br>
    <h2 class="card-title" style="text-align: center;">Cadastro de Turmas</h2>
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
            <form action="turmascadastrar" method="GET"> <!-- Ajuste o action se necessário -->

                <!-- Nome -->
                <h3 style="text-align: center;">Nome da Turma:</h3>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da turma"
                        required
                        style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
                    <label for="nome">Nome da Turma</label>
                </div>
                <br>

                <!-- Série -->
                <h3 style="text-align: center;">De qual série essa turma faz parte?:</h3>
                    @csrf
                    <select name="serie" class="form-select" aria-label="Default select example" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
                        <option selected Disabled>Escolha a Série</option>
                        @foreach($series as $serie)
                        <option>{{$serie->nome}}</option>

                        @endforeach
                    </select>
                <br>
                <!-- Botão Cadastrar -->
                <div>
                    <button type="submit" class="btn" style="background-color: #E5CD59; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 120px; text-align: center; color: #000000;">Cadastrar</button>
                </div>
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


</x-layout>