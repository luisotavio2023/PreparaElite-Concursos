<!doctype html>
<html lang="PT-BR">
  <head>
    <title>Gerenciamento Geral - PreparaElite</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color: #004aad;">
        <a class="navbar-brand text-white" href="#">PreparaElite Concursos</a>
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
    </nav>

    <div class="d-flex justify-content-center align-items-center py-3">
        <h1>Gerenciamento Geral</h1>
    </div>

    <div>
        <div>
        <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Adicionar novo professor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Adicionar novo banner</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

    <form>
      <div class="py-4 mx-5 justify-content-center align-items-center form-group">
        <label class="form-label">Nome do professor</label>
        <input type="text" class="form-control">
      </div>
      <div class="py-3 mx-5 justify-content-center align-items-center">
        <label class="form-label">Email pessoal</label>
        <input type="email" class="form-control" required>
      </div>
      <div class="mx-5 py-3 justify-content-center align-items-center">
        <label class="form-label">Senha para login</label>
        <input type="password" class="form-control" required>
      </div>
      <div class="mx-5 py-3 justify-content-center align-items-center form-group">
        <label class="form-label">Foto de perfil (30x40)</label>
        <input type="file" class="form-control" required>
      </div>
      <div class="form-group mx-5 py-3 justify-content-center align-items-center">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="00/00/0000" required>
      </div>
      <div class="form-group mx-5 py-3 justify-content-center align-items-center">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
      </div>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
      });
    </script>
  </body>
</html>