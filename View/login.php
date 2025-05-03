<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PreparaElite Concursos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light" style="font-family: 'Poppins', sans-serif;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">
                <i class="fas fa-graduation-cap me-2"></i>
                PreparaElite Concursos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Container -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg overflow-hidden">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <img src="../images/BrasaoPreparaSF.png" alt="PreparaElite" class="img-fluid mb-3" style="max-width: 180px;">
                        <h2 class="mb-0">Bem-vindo de volta!</h2>
                        <p class="mb-0">Acesse sua conta para continuar seus estudos</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        <?php if (isset($_GET['erro'])): ?>
                            <div class="alert alert-danger d-flex align-items-center">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                Credenciais inválidas. Por favor, tente novamente.
                            </div>
                        <?php endif; ?>
                        
                        <form method="post" action="../Control/UserController.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                    <input type="email" class="form-control" id="email" name="login_email" placeholder="seu@email.com" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                    <input type="password" class="form-control" id="password" name="login_password" placeholder="Sua senha" required>
                                </div>
                                <div class="text-end mt-2">
                                    <a href="#" class="text-decoration-none">Esqueceu a senha?</a>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-3 mb-3 fw-bold">
                                <i class="fas fa-sign-in-alt me-2"></i> Entrar
                            </button>
                            
                            <div class="d-flex align-items-center my-4">
                                <hr class="flex-grow-1">
                                <span class="mx-3 text-muted">ou</span>
                                <hr class="flex-grow-1">
                            </div>
                            
                            <div class="mb-4">
                                <button type="button" class="btn btn-outline-primary w-100 mb-2">
                                    <i class="fab fa-google me-2"></i> Continuar com Google
                                </button>
                                <button type="button" class="btn btn-outline-dark w-100">
                                    <i class="fab fa-apple me-2"></i> Continuar com Apple
                                </button>
                            </div>
                            
                            <div class="text-center">
                                <p class="mb-0">Não tem uma conta? <a href="register.php" class="text-decoration-none fw-bold">Cadastre-se</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h5>Sobre nós</h5>
                    <p class="mb-0">PreparaElite Concursos - A plataforma mais completa para sua aprovação em concursos públicos.</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Termos de uso</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Política de privacidade</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Redes sociais</h5>
                    <div>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 PreparaElite Concursos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>