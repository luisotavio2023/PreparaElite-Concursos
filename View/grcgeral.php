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
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>

      // Função para submeter o formulário de acordo com o tipo selecionado
      function submitForm(id) {
        const form = document.querySelector(id);
        form.submit();
      }
      // Função para mostrar os formulários
      function showForm(formType) {
        const forms = ['professor', 'banner', 'cadastros', 'vendas'];
        forms.forEach(function(form) {
          document.getElementById('form-' + form).style.display = (form === formType) ? 'block' : 'none';
        });

        const tabs = document.querySelectorAll('.nav-link');
        tabs.forEach(tab => tab.classList.remove('active'));

        if (formType === 'professor') {
          document.getElementById('tab-professor').classList.add('active');
        } else if (formType === 'banner') {
          document.getElementById('tab-banner').classList.add('active');
        } else if (formType === 'cadastros') {
          document.getElementById('tab-cadastros').classList.add('active');
        } else if (formType === 'vendas') {
          document.getElementById('tab-vendas').classList.add('active');
        }
      }

    </script>
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
      <ul class="nav nav-pills nav-fill">
        <!-- Tabs de navegação -->
        <li class="nav-item">
          <a class="nav-link" id="tab-professor" href="javascript:void(0)" onclick="showForm('professor')" data-toggle="pill" role="tab" aria-controls="AddProfessor" aria-selected="true">Adicionar novo professor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tab-banner" href="javascript:void(0)" onclick="showForm('banner')" data-toggle="pill" role="tab" aria-controls="AdicionarBanner">Adicionar novo banner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tab-cadastros" href="javascript:void(0)" onclick="showForm('cadastros')" data-toggle="pill" role="tab" aria-controls="VisualizarProfessoresEAlunos">Visualizar cadastros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tab-vendas" aria-disabled="true" href="javascript:void(0)" onclick="showForm('vendas')" data-toggle="pill" role="tab" aria-controls="VisualizarVendas">Visualizar vendas</a>
        </li>
      </ul>

      <!-- Formulários -->
      <form id="form-professor" method="post" action="../Control/TeacherController.php" style="<?php echo isset($_POST['tipo']) ? 'display: none;' : 'display: block;'; ?>">
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
        <div class="mx-5 py-3 justify-content-center align-items-center">
          <label class="form-label">Salário</label>
          <input type="float" class="form-control" required>
        </div>
        <div class="mx-5 py-3 justify-content-center align-items-center">
          <label class="form-label">Formação</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="mx-5 py-3 justify-content-center align-items-center">
          <button type="button" class="btn btn-primary btn-block">Cadastrar</button>
        </div>
      </form>

      <!-- Formulário de adicionar novo banner -->
      <form id="form-banner" method="post" action="../Control/BannerController.php" style="display:none;">
        <div class="py-4 mx-5 justify-content-center align-items-center form-group">
          <label class="form-label">Título do Banner</label>
          <input type="text" class="form-control">
        </div>
        <div class="py-3 mx-5 justify-content-center align-items-center">
          <label class="form-label">Imagem do Banner</label>
          <input type="file" class="form-control" required>
        </div>
        <div class="mx-5 py-3 justify-content-center align-items-center">
          <label class="form-label">Link do Banner</label>
          <input type="url" class="form-control" required>
        </div>
        <div class="mx-5 py-3 justify-content-center align-items-center">
          <button type="button" class="btn btn-primary btn-block">Cadastrar</button>
        </div>
      </form>

      <!-- Formulário de visualizar cadastros -->
      <div id="form-cadastros" style="<?php echo isset($_POST['tipo']) ? 'display: block;' : 'display: none;'; ?>">
        <div class="container">
          <form method="post" class="mb-3" id="form-consulta">
              <div class="form-group">
                  <label for="tipo">Selecione o tipo:</label>
                  <select name="tipo" id="tipo" class="form-control" onchange="submitForm('#form-consulta')">
                      <option value="usuarios" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'usuarios') ? 'selected' : ''; ?>>Usuários</option>
                      <option value="professores" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'professores') ? 'selected' : ''; ?>>Professores</option>
                  </select>
              </div>
          </form>

          <table class="table table-striped">
            <thead>
                <tr>
                    <?php 
                    include('../Control/admController.php');
                    $obj = new AdmController();
                    if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'){
                        $data = $obj->listarProfessores(); 
                    ?>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Salário</th>
                    <?php } else { 
                        $data = $obj->listarUsuarios(); ?>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Nacionalidade</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php if ($data): ?>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <?php if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'): ?>
                                <th scope="row"><?php echo $row->getCodigo(); ?></th>
                                <td><?php echo $row->getNome(); ?></td>
                                <td><?php echo $row->getEmail(); ?></td>
                                <td><img src="<?php echo $row->getFoto(); ?>" alt="Foto" style="width: 50px; height: 50px;"></td>
                                <td><?php echo date('d/m/Y', strtotime($row->getDataNascimento())); ?></td>
                                <td><?php echo $row->getCPF(); ?></td>
                                <td><?php echo number_format($row->getSalario(), 2, ',', '.'); ?></td>
                            <?php else: ?>
                                <th scope="row"><?php echo $row->getId(); ?></th>
                                <td><?php echo $row->getEmail(); ?></td>
                                <td><?php echo $row->getNome(); ?></td>
                                <td><?php echo $row->getCPF(); ?></td>
                                <td><?php echo $row->getTipoUs(); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($row->getDataNascimento())); ?></td>
                                <td><?php echo $row->getDescricao(); ?></td>
                                <td><?php echo $row->getNacionalidade(); ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
      </div>
    </div>

    <script>

<?php if (isset($_POST['tipo'])) { ?>
          document.getElementById('tab-professor').classList.remove('active');
          document.getElementById('tab-banner').classList.remove('active');
          document.getElementById('tab-cadastros').classList.add('active');
          document.getElementById('tab-vendas').classList.remove('active');
        <?php } else { ?>
          document.getElementById('tab-professor').classList.add('active');
          document.getElementById('tab-banner').classList.remove('active');
          document.getElementById('tab-cadastros').classList.remove('active');
          document.getElementById('tab-vendas').classList.remove('active');
          <?php } ?>
      </script>
  </body>
</html>
