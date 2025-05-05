<!doctype html>
<html lang="pt-BR">
<head>
    <title>Minha Conta - PreparaElite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-light">
    <!-- Navbar Principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-graduation-cap me-2"></i>PreparaElite
            </a>
            
            <!-- Search Bar -->
            <div class="d-flex mx-lg-3 flex-grow-1">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Buscar cursos..." aria-label="Search">
                    <button class="btn btn-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            
            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#"><i class="fas fa-store me-1"></i> Loja</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#"><i class="fas fa-book-open me-1"></i> Meus Cursos</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i> Simulados</a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> Minha Conta
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Olá, [Nome do Aluno]!</h6></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Meu Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-book me-2"></i> Meus Cursos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-certificate me-2"></i> Certificados</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-credit-card me-2"></i> Assinatura</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link position-relative" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                2
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Promocional -->
    <div class="container-fluid px-0 mb-4">
        <div class="bg-primary text-white py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="fw-bold">Oferta Especial para Você!</h2>
                        <p class="lead">50% de desconto em todos os cursos de Direito esta semana</p>
                        <a href="#" class="btn btn-light btn-lg">Aproveitar Oferta</a>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <img src="https://via.placeholder.com/300x150" alt="Promoção" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="container">
        <!-- Seção de Cursos em Destaque -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold"><i class="fas fa-star me-2"></i> Cursos em Destaque</h2>
                    <a href="#" class="btn btn-outline-primary">Ver todos</a>
                </div>
                
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <!-- Curso 1 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                                <span class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 m-2 small rounded">-50%</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-primary">Direito</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <h5 class="card-title">Direito Constitucional</h5>
                                <p class="card-text text-muted small">Prof. Carlos Silva</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="text-decoration-line-through text-muted small">R$ 199,90</span>
                                        <h5 class="text-primary mb-0">R$ 99,90</h5>
                                    </div>
                                    <button class="btn btn-sm btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Curso 2 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                                <span class="position-absolute top-0 end-0 bg-success text-white px-2 py-1 m-2 small rounded">Novo</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-info">Matemática</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="card-title">Matemática Financeira</h5>
                                <p class="card-text text-muted small">Prof. Ana Oliveira</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-primary mb-0">R$ 129,90</h5>
                                    <button class="btn btn-sm btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Curso 3 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                                <span class="position-absolute top-0 end-0 bg-warning text-dark px-2 py-1 m-2 small rounded">Mais Vendido</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-success">Informática</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="card-title">Informática para Concursos</h5>
                                <p class="card-text text-muted small">Prof. Roberto Santos</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-primary mb-0">R$ 89,90</h5>
                                    <button class="btn btn-sm btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Curso 4 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                                <span class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 m-2 small rounded">Últimas Vagas</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-secondary">Português</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <h5 class="card-title">Português Completo</h5>
                                <p class="card-text text-muted small">Prof. Juliana Costa</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-primary mb-0">R$ 109,90</h5>
                                    <button class="btn btn-sm btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Seção de Meus Cursos -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold"><i class="fas fa-book-open me-2"></i> Meus Cursos</h2>
                    <a href="#" class="btn btn-outline-primary">Ver todos</a>
                </div>
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Curso 1 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <h5 class="card-title">Direito Administrativo</h5>
                                <p class="card-text text-muted small">Prof. Carlos Silva</p>
                                <div class="progress mb-3" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">65% completo</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Curso 2 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <h5 class="card-title">Raciocínio Lógico</h5>
                                <p class="card-text text-muted small">Prof. Ana Oliveira</p>
                                <div class="progress mb-3" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 30%"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">30% completo</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Curso 3 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <h5 class="card-title">Administração Pública</h5>
                                <p class="card-text text-muted small">Prof. Roberto Santos</p>
                                <div class="progress mb-3" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">85% completo</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Categorias -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold mb-4"><i class="fas fa-tags me-2"></i> Categorias</h2>
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-primary text-white text-center p-4 shadow-sm">
                                <i class="fas fa-balance-scale fa-2x mb-2"></i>
                                <h5 class="mb-0">Direito</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-info text-white text-center p-4 shadow-sm">
                                <i class="fas fa-calculator fa-2x mb-2"></i>
                                <h5 class="mb-0">Matemática</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-success text-white text-center p-4 shadow-sm">
                                <i class="fas fa-laptop-code fa-2x mb-2"></i>
                                <h5 class="mb-0">Informática</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-warning text-dark text-center p-4 shadow-sm">
                                <i class="fas fa-language fa-2x mb-2"></i>
                                <h5 class="mb-0">Português</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">PreparaElite Concursos</h5>
                    <p>Sua plataforma de preparação para concursos públicos de alto nível.</p>
                    <div class="d-flex">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="mb-3">Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="inicial.php" class="text-white text-decoration-none">Início</a></li>
                        <li class="mb-2"><a href="loja.php" class="text-white text-decoration-none">Cursos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Planos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5 class="mb-3">Suporte</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Central de Ajuda</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Política de Privacidade</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Termos de Uso</a></li>
                        <li class="mb-2"><a href="trabalheconosco.php" class="text-white text-decoration-none">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> contato@preparaelite.com</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (11) 1234-5678</li>
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> São Paulo, SP</li>
                        <li class="mb-2"><i class="fab fa-whatsapp me-2"></i> (11) 98765-4321</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <small>&copy; 2024 PreparaElite Concursos. Todos os direitos reservados.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small>
                        <a href="#" class="text-white text-decoration-none me-2">Termos de Serviço</a>
                        <a href="#" class="text-white text-decoration-none">Política de Privacidade</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simular contador de itens no carrinho
        document.addEventListener('DOMContentLoaded', function() {
            const cartBadge = document.querySelector('.nav-link .badge');
            
            // Simular adição ao carrinho
            const buyButtons = document.querySelectorAll('.btn-primary');
            buyButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const currentCount = parseInt(cartBadge.textContent);
                    cartBadge.textContent = currentCount + 1;
                    
                    // Efeito visual
                    cartBadge.classList.add('animate__animated', 'animate__bounce');
                    setTimeout(() => {
                        cartBadge.classList.remove('animate__animated', 'animate__bounce');
                    }, 1000);
                    
                    alert('Curso adicionado ao carrinho!');
                });
            });
        });
    </script>
</body>
</html>