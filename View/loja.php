<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Premium - PreparaElite</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Glide.js (Carrossel) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.min.css">
</head>
<body class="bg-light" style="font-family: 'Poppins', sans-serif;">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-graduation-cap text-primary me-2"></i>
                PreparaElite
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Materiais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                </ul>
                
                <form class="d-flex me-3 w-50">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar cursos...">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-light position-relative" type="button" id="cartDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cartDropdown">
                            <li><h6 class="dropdown-header">Seu Carrinho</h6></li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://via.placeholder.com/50" width="40" class="rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">Curso Direito Constitucional</p>
                                            <small class="text-muted">R$ 297,00</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://via.placeholder.com/50" width="40" class="rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">Pacote de Questões</p>
                                            <small class="text-muted">R$ 97,00</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    <span>Total:</span>
                                    <strong>R$ 394,00</strong>
                                </a>
                            </li>
                            <li><a class="dropdown-item text-center bg-primary text-white" href="#">Finalizar Compra</a></li>
                        </ul>
                    </div>
                    
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuário" class="rounded-circle me-2" width="40">
                            <span class="d-none d-md-inline">Minha Conta</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-book me-2"></i> Meus Cursos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i> Favoritos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid p-4">
        <!-- Hero Banner -->
        <div class="card bg-primary text-white mb-4 border-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <div>
                        <h1 class="display-5 fw-bold">Prepare-se para ser aprovado!</h1>
                        <p class="lead">Materiais exclusivos e cursos completos para seu sucesso</p>
                        <button class="btn btn-light btn-lg px-4">Ver Ofertas</button>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid h-100" style="object-fit: cover;">
                </div>
            </div>
        </div>
        
        <!-- Categories -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Categorias</h4>
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver todas</a>
                </div>
                <hr class="mt-2">
                
                <div class="glide categories-slider">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides list-unstyled">
                            <li class="glide__slide">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block">
                                            <i class="fas fa-gavel text-primary fs-4"></i>
                                        </div>
                                        <h6 class="mt-3 mb-0">Direito</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                                        <div class="bg-success bg-opacity-10 p-3 rounded-circle d-inline-block">
                                            <i class="fas fa-landmark text-success fs-4"></i>
                                        </div>
                                        <h6 class="mt-3 mb-0">Administrativo</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                                        <div class="bg-danger bg-opacity-10 p-3 rounded-circle d-inline-block">
                                            <i class="fas fa-shield-alt text-danger fs-4"></i>
                                        </div>
                                        <h6 class="mt-3 mb-0">Segurança</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle d-inline-block">
                                            <i class="fas fa-chart-pie text-warning fs-4"></i>
                                        </div>
                                        <h6 class="mt-3 mb-0">Fiscal</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                                        <div class="bg-info bg-opacity-10 p-3 rounded-circle d-inline-block">
                                            <i class="fas fa-balance-scale text-info fs-4"></i>
                                        </div>
                                        <h6 class="mt-3 mb-0">Tribunais</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left btn btn-sm btn-light rounded-circle" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
                        <button class="glide__arrow glide__arrow--right btn btn-sm btn-light rounded-circle" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Featured Products -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Destaques</h4>
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver todos</a>
                </div>
                <hr class="mt-2">
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-20%</span>
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-primary">Novo</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <small class="text-muted">(42)</small>
                                    </div>
                                </div>
                                <h5 class="card-title">Curso Completo de Direito Constitucional</h5>
                                <p class="card-text text-muted small">Prepare-se para dominar a matéria com nosso curso completo.</p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div>
                                        <span class="text-decoration-line-through text-muted small">R$ 497,00</span>
                                        <h4 class="text-primary mb-0">R$ 397,00</h4>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-success">Mais vendido</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <small class="text-muted">(128)</small>
                                    </div>
                                </div>
                                <h5 class="card-title">Pacote de Questões Comentadas - PF</h5>
                                <p class="card-text text-muted small">Mais de 1.000 questões comentadas por especialistas.</p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <h4 class="text-primary mb-0">R$ 197,00</h4>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <span class="badge bg-info position-absolute top-0 end-0 m-2">Lançamento</span>
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-warning">Últimas vagas</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <small class="text-muted">(36)</small>
                                    </div>
                                </div>
                                <h5 class="card-title">Intensivo para Delegado - 60 dias</h5>
                                <p class="card-text text-muted small">Curso intensivo com os tópicos mais cobrados.</p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <h4 class="text-primary mb-0">R$ 597,00</h4>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-secondary">Digital</span>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <small class="text-muted">(214)</small>
                                    </div>
                                </div>
                                <h5 class="card-title">Coleção de Livros Digitais - Direito</h5>
                                <p class="card-text text-muted small">10 livros digitais completos para seu estudo.</p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div>
                                        <span class="text-decoration-line-through text-muted small">R$ 297,00</span>
                                        <h4 class="text-primary mb-0">R$ 197,00</h4>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Filter and Products Section -->
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="card border-0 shadow-sm sticky-top" style="top: 20px;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-uppercase mb-4">Filtrar por</h5>
                        
                        <!-- Categories -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase mb-3">Categorias</h6>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center">
                                    Policiais
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center">
                                    Tribunais
                                    <span class="badge bg-primary rounded-pill">8</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center">
                                    Militares
                                    <span class="badge bg-primary rounded-pill">5</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center">
                                    Administrativo
                                    <span class="badge bg-primary rounded-pill">12</span>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Price Filter -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase mb-3">Faixa de Preço</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="price1">
                                <label class="form-check-label" for="price1">Até R$ 100,00</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="price2">
                                <label class="form-check-label" for="price2">R$ 100,00 - R$ 300,00</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="price3">
                                <label class="form-check-label" for="price3">R$ 300,00 - R$ 500,00</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="price4">
                                <label class="form-check-label" for="price4">Acima de R$ 500,00</label>
                            </div>
                        </div>
                        
                        <!-- Status -->
                        <div class="mb-3">
                            <h6 class="fw-bold text-uppercase mb-3">Status</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="editalAberto">
                                <label class="form-check-label" for="editalAberto">Edital Aberto</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inscricoesAbertas">
                                <label class="form-check-label" for="inscricoesAbertas">Inscrições Abertas</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Products -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0">Todos os Produtos</h4>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                            Ordenar por: Mais recentes
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Mais recentes</a></li>
                            <li><a class="dropdown-item" href="#">Preço: menor para maior</a></li>
                            <li><a class="dropdown-item" href="#">Preço: maior para menor</a></li>
                            <li><a class="dropdown-item" href="#">Mais vendidos</a></li>
                            <li><a class="dropdown-item" href="#">Melhor avaliados</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="row g-4">
                    <?php for($i = 0; $i < 9; $i++): ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="card border-0 shadow-sm h-100">
                            <?php if($i % 4 == 0): ?>
                                <span class="badge bg-success position-absolute top-0 end-0 m-2">Mais vendido</span>
                            <?php elseif($i % 3 == 0): ?>
                                <span class="badge bg-danger position-absolute top-0 end-0 m-2">-20%</span>
                            <?php elseif($i % 2 == 0): ?>
                                <span class="badge bg-info position-absolute top-0 end-0 m-2">Lançamento</span>
                            <?php else: ?>
                                <span class="badge bg-primary position-absolute top-0 end-0 m-2">Novo</span>
                            <?php endif; ?>
                            
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <?php if($i % 3 == 0): ?>
                                        <span class="badge bg-warning">Últimas vagas</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Digital</span>
                                    <?php endif; ?>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="<?= ($i % 2 == 0) ? 'fas fa-star-half-alt' : 'far fa-star' ?>"></i>
                                        <small class="text-muted">(<?= rand(10, 200) ?>)</small>
                                    </div>
                                </div>
                                <h5 class="card-title">Curso de <?= ['Direito Administrativo', 'Processo Penal', 'Direito Constitucional', 'Português para Concursos', 'Raciocínio Lógico', 'Informática', 'Contabilidade', 'Auditoria', 'Administração Pública'][$i] ?></h5>
                                <p class="card-text text-muted small"><?= 
                                    [
                                        'Domine os principais tópicos de Direito Administrativo para seus concursos.',
                                        'Curso completo com as atualizações mais recentes do Processo Penal.',
                                        'Prepare-se para as questões mais cobradas de Direito Constitucional.',
                                        'Português focado em concursos públicos com os melhores professores.',
                                        'Aprenda Raciocínio Lógico de forma prática e objetiva.',
                                        'Tudo sobre Informática para concursos, desde básico até avançado.',
                                        'Contabilidade pública e geral para seus estudos.',
                                        'Curso de Auditoria com enfoque nas principais bancas examinadoras.',
                                        'Administração Pública completa para concursos de alto nível.'
                                    ][$i] 
                                ?></p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div>
                                        <?php if($i % 3 == 0): ?>
                                            <span class="text-decoration-line-through text-muted small">R$ <?= rand(300, 600) ?>,00</span>
                                        <?php endif; ?>
                                        <h4 class="text-primary mb-0">R$ <?= rand(100, 500) ?>,00</h4>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próxima</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">PreparaElite</h5>
                    <p>A plataforma mais completa para sua aprovação em concursos públicos.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Início</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Cursos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Loja</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Ajuda</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Perguntas Frequentes</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Termos de Uso</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Política de Privacidade</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> contato@preparaelite.com</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (XX) XXXX-XXXX</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Av. Exemplo, 1234</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 PreparaElite. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white text-decoration-none me-3">Termos</a>
                        <a href="#" class="text-white text-decoration-none">Privacidade</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Glide.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>
    
    <script>
        // Initialize Glide.js for categories slider
        new Glide('.categories-slider', {
            type: 'carousel',
            perView: 5,
            breakpoints: {
                992: {
                    perView: 4
                },
                768: {
                    perView: 3
                },
                576: {
                    perView: 2
                }
            }
        }).mount();
    </script>
</body>
</html>