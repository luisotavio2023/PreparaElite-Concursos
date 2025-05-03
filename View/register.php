<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Cadastro | PreparaElite Concursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>
  <body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="#">
          <i class="fas fa-graduation-cap me-2"></i>PreparaElite
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-home me-1"></i> Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-sign-in-alt me-1"></i> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card border-0 shadow-lg overflow-hidden">
            <div class="card-header bg-primary text-white py-3 text-center">
              <h3 class="mb-1">Crie sua conta</h3>
              <p class="mb-0">Junte-se a milhares de concurseiros de elite</p>
            </div>
            <div class="card-body p-4 p-md-5">
              <div class="text-center mb-4">
                <img src="../images/BrasaoPreparaSF.png" alt="PreparaElite" class="img-fluid" style="max-width: 180px;">
              </div>
              
              <?php if (isset($_GET['erro'])): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                  <strong>Erro!</strong> Não foi possível completar seu cadastro. Por favor, tente novamente.
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              <?php endif; ?>
              
              <form method="post" action="../Control/UserController.php">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="nome" class="form-label">Nome completo</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                  </div>
                </div>
                
                <div class="row g-3 mt-1">
                  <div class="col-md-6">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha forte" required>
                    </div>
                    <div class="form-text">Mínimo de 8 caracteres</div>
                  </div>
                  <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                    </div>
                  </div>
                </div>
                
                <div class="row g-3 mt-1">
                  <div class="col-md-6">
                    <label for="datanasc" class="form-label">Data de Nascimento</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                      <input type="date" class="form-control" id="datanasc" name="datanasc" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="nacionalidade" class="form-label">Nacionalidade</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                      <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Ex: Brasileira" required>
                    </div>
                  </div>
                </div>
                
                <div class="mt-3">
                  <label for="descricao" class="form-label">Sobre você</label>
                  <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Conte um pouco sobre seus objetivos e experiências"></textarea>
                  <div class="form-text">Esta informação ajudará nossos professores a te conhecerem melhor</div>
                </div>
                
                <div class="form-check mt-3">
                  <input class="form-check-input" type="checkbox" id="terms" required>
                  <label class="form-check-label" for="terms">Li e aceito os <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a></label>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2 mt-3">
                  <i class="fas fa-user-plus me-2"></i> Criar conta
                </button>
              </form>
              
              <div class="d-flex align-items-center my-4">
                <hr class="flex-grow-1">
                <span class="px-3 text-muted">ou</span>
                <hr class="flex-grow-1">
              </div>
              
              <div class="row g-2">
                <div class="col-md-6">
                  <a href="#" class="d-flex align-items-center justify-content-center btn btn-danger mb-2 text-decoration-none">
                    <i class="fab fa-google me-2"></i> Cadastre-se com Google
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="#" class="d-flex align-items-center justify-content-center btn btn-primary mb-2 text-decoration-none" style="background-color: #4267b2;">
                    <i class="fab fa-facebook-f me-2"></i> Cadastre-se com Facebook
                  </a>
                </div>
              </div>
              
              <div class="text-center mt-4">
                <p class="mb-0">Já tem uma conta? <a href="login.php" class="fw-bold text-decoration-none">Faça login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-3">
      <div class="container">
        <div class="row text-center text-md-start">
          <div class="col-md-6 mb-3 mb-md-0">
            <h5>PreparaElite Concursos</h5>
            <p class="mb-0">Sua plataforma de preparação para concursos públicos</p>
          </div>
          <div class="col-md-6">
            <h5>Contato</h5>
            <p class="mb-0">
              <i class="fas fa-envelope me-2"></i> contato@preparaelite.com.br<br>
              <i class="fas fa-phone me-2"></i> (00) 1234-5678
            </p>
          </div>
        </div>
        <hr class="my-3 bg-light">
        <p class="mb-0 text-center">&copy; 2024 PreparaElite Concursos. Todos os direitos reservados.</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: false});
        
        // Validação de formulário
        $('form').submit(function(e) {
          let password = $('#password').val();
          if (password.length < 8) {
            alert('A senha deve ter no mínimo 8 caracteres');
            e.preventDefault();
          }
        });
      });
    </script>
  </body>
</html>