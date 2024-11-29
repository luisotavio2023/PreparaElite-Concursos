<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Loja PreparaElite</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
    .vertical-line {
      border-right: 2px solid #ccc;
      height: 100vh;
    }
  </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

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

    <!-- Carrossel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Third slide">
        </div>
      </div>
    </div>

    <div class="container-fluid">
  <div class="row">
    <!-- Barra Lateral (Lado Esquerdo) com Contorno, sem a barra lateral -->
    <div class="col-12 col-md-3 p-3 ms-3" style="border-right: 1px solid rgba(0, 0, 0, 0.1); border-radius: 8px 0 0 8px;">
      <h5 class="fw-bold text-uppercase mb-4">Policiais</h5>

      <!-- Lista de Carreiras -->
      <div class="accordion accordion-flush">
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícia Militar</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícia Civil</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícia Federal</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícia Rodoviária Federal</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Depen</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícia Científica</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Polícias Legislativas</a>
          </h6>
        </div>
      </div>

      <!-- Seção Nível -->
      <div class="mt-4">
        <h5 class="fw-bold text-dark text-uppercase mb-3">Tribunais</h5>
       <!-- Lista de Carreiras -->
      <div class="accordion accordion-flush">
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Supremo Tribunal Federal</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Supremo Tribunal de Justiça</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Tribunal de Justiça</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Tribunal Regional Eleitoral</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Tribunal Regional Federal</a>
          </h6>
        </div>
        <div class="accordion-item border-0">
          <h6 class="accordion-header">
            <a href="#" class="text-decoration-none text-secondary">Tribunal Regional do Trabalho</a>
          </h6>
        </div>
      </div>
      </div>

      <!-- Seção Extra -->
      <div class="mt-4">
        <h5 class="fw-bold text-dark text-uppercase mb-3"></h5>
        <ul class="list-unstyled">
          <li class="form-check">
            <input class="form-check-input" type="checkbox" id="editalAberto" />
            <label class="form-check-label" for="editalAberto">Edital Aberto</label>
          </li>
          <li class="form-check">
            <input class="form-check-input" type="checkbox" id="inscricoesAbertas" />
            <label class="form-check-label" for="inscricoesAbertas">Inscrições Abertas</label>
          </li>
        </ul>
      </div>
    </div>

    <!-- Conteúdo Principal (Lado Direito) -->
    <div class="col-12 col-md-8 p-3">
      <?php foreach ($produtos as $produto): ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card">
            <img src="imagens/<?php echo $produto['ImgProduto']; ?>" class="card-img-top" alt="<?php echo $produto['nome']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
              <p class="card-text"><?php echo $produto['descricao']; ?></p>
              <p class="card-text">Quantidade disponível: <?php echo $produto['qtdprod']; ?></p>
              <p class="card-text">R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>




    <footer class="bg-primary text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5>Links Úteis</h5>
            <a href="trabalheconosco.php" class="text-white d-block mb-2">Trabalhe Conosco</a>
            <a href="#" class="text-white d-block mb-2">SAC</a>
            <a href="#" class="text-white d-block mb-2">Dúvidas</a>
            <a href="https://www.planalto.gov.br/ccivil_03/leis/l8078compilado.htm" class="text-white d-block mb-2">Código de Defesa do Consumidor</a>
          </div>
          <div class="col-md-6 text-right">
            <h5>Contato</h5>
            <p class="mb-2">Email: exemplo@email.com</p>
            <p class="mb-2">Telefone: <a href="https://wa.me/seunumerodetelefone" class="text-white"> (XX) XXXX-XXXX</a></p>
            <p class="mb-0">Endereço: Av. Exemplo, 1234, Cidade, Estado</p>
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
