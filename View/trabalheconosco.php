<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .nav-item.dropdown .nav-link {
        margin-left: 2cm;
    }

    .footer {
        position: static;
        bottom: 0;
        width: 100%;
        background-color: #004aad;
        color: #fff;
        padding: 20px 0;
    }
    .footer-links {
        text-align: left;
    }
    .footer-links a {
        display: flex;
        color: #fff;
        text-decoration: none;
        margin-bottom: 5px;
    }
    .contact-info {
        text-align: right;
    }
    .contact-info p {
        margin-bottom: 5px;
    }

    
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color: #004aad;">
  <a class="navbar-brand" href="#" style="color: white;">PreparaElite Concursos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="navbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
</div>
</nav>

<div class="d-flex justify-content-center mt-3">
    <h2>Trabalhe Conosco</h2>
</div>

<div class="container mt-4 col-sm-4">
  <form action="../Control/UserController.php">
    <div class="form-group">
      <label for="name">Seu nome:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Seu email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="position">Cargo que deseja trabalhar:</label>
      <select class="form-control" id="position" name="position">
        <option value="Selecione" selected>Selecione</option>
        <option value="professor">Professor</option>
        <option value="estagiario">Estagiário</option>
        <option value="Técnico em T.I"></option>
        <option value="auxiliar_professor">Auxiliar de Professor</option>
      </select>
    </div>
    <div class="form-group">
      <label for="resume">Seu currículo:</label>
      <input type="file" class="form-control-file" id="resume" name="resume">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
</div>

<footer class="footer" style="margin-top: 100px;"> 
  <div class="container">
    <div class="row">
      <div class="col-md-6 footer-links">
        <h5>Links Úteis</h5>
        <a href="">Trabalhe Conosco</a>
        <a href="#">SAC</a>
        <a href="#">Dúvidas</a>
        <a href="https://www.planalto.gov.br/ccivil_03/leis/l8078compilado.htm">Código de Defesa do Consumidor</a>
      </div>
      <div class="col-md-6 contact-info">
        <h5>Contato</h5>
        <p>Email: exemplo@email.com</p>
        <p>Telefone:<a href="https://wa.me/seunumerodetelefone"> (XX) XXXX-XXXX</a></p>
        <p>Endereço: Av. Exemplo, 1234, Cidade, Estado</p>
      </div>
    </div>
  </div>
</footer>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>