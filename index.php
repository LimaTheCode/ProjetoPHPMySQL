<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, #0d6efd, #084298);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 40px 0;
        }

        footer {
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 20px;
        }

        section {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <!-- Nome do projeto -->
            <a class="navbar-brand fw-bold" href="#">
                Controle de Estoque
            </a>

            <!-- Botão Mobile -->
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menus -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <!-- Produtos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">
                            Produtos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cadastrar Produto</a></li>
                            <li><a class="dropdown-item" href="#">Listar Produtos</a></li>
                            <li><a class="dropdown-item" href="#">Categorias</a></li>
                        </ul>
                    </li>

                    <!-- Movimentações -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">
                            Movimentações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Entradas</a></li>
                            <li><a class="dropdown-item" href="#">Saídas</a></li>
                            <li><a class="dropdown-item" href="#">Histórico</a></li>
                        </ul>
                    </li>

                    <!-- Relatórios -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Estoque Atual</a></li>
                            <li><a class="dropdown-item" href="#">Baixo Estoque</a></li>
                            <li><a class="dropdown-item" href="#">Exportar Dados</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <h1 class="display-5 fw-bold">Sistema de Controle de Estoque</h1>
            <p class="lead">
                Gerencie produtos, movimentações e relatórios de forma simples e eficiente.
            </p>
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <section>
    <h2>Bem-vindo</h2>
    <p>
        Utilize os menus superiores para acessar os módulos do sistema.
    </p>

    <div class="row mt-4">

        <!-- Produtos -->
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text">
                        Cadastre e gerencie os produtos do estoque.
                    </p>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">
                            Cadastrar Produto
                        </button>

                        <button class="btn btn-outline-primary">
                            Listar Produtos
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Movimentações -->
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Movimentações</h5>
                    <p class="card-text">
                        Controle entradas e saídas de mercadorias.
                    </p>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success">
                            Registrar Entrada
                        </button>

                        <button class="btn btn-outline-success">
                            Registrar Saída
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Relatórios -->
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Relatórios</h5>
                    <p class="card-text">
                        Visualize indicadores e exporte informações.
                    </p>

                    <div class="d-grid gap-2">
                        <button class="btn btn-warning text-dark">
                            Gerar Relatório
                        </button>

                        <button class="btn btn-outline-warning">
                            Exportar Dados
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">
                &copy; 2026 Controle de Estoque. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>