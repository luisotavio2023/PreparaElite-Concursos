<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Página de registro - PreparaElite Concursos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light text-dark" style="padding-bottom: 100px;">

    <nav class="navbar navbar-expand-lg" style="background-color: #004aad;">
      <a class="navbar-brand text-white" href="#">PreparaElite Concursos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Perfil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Gerenciar Perfil</a>
              <a class="dropdown-item" href="#">Carrinho</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sair/logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  
    <div class="container mt-5">
      <div class="text-center mb-4">
        <img src="../images/BrasaoPreparaSF.png" alt="ConcurseiroElite Pro" class="img-fluid" style="width: 200px;">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="bg-white p-4 rounded shadow-sm mb-4">
            <div class="text-center mb-4">
              <h2>Bem-vindo ao PreparaElite Concursos</h2>
              <p>Faça seu registro e seja bem vindo(a)!</p>
            </div>
            <form method="post" action="../Control/UserController.php">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" required>
              </div>
              <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Sua Senha" required>
              </div>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
              </div>
              <div class="form-group">
                <label for="datanasc">Data de Nascimento</label>
                <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="00/00/0000" required>
              </div>
              <div class="form-group">
                <label for="descricao">Sua descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descreva-se aqui" required>
              </div>
              <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Ex: BR" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </form>
            <div class="text-center mt-3">
              <p>Já possui uma conta? <a href="login.php">Clique aqui</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <p class="position-fixed bottom-0 right-0 mb-3 mr-3 text-muted" style="font-size: 12px;">&copy; 2024 ConcurseiroElite Pro - Todos os direitos reservados</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
      });
    </script>
  </body>
</html>
