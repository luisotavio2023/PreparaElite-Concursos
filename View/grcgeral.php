<!doctype html>
<html lang="pt-BR">
<head>
    <title>Gerenciamento Geral - PreparaElite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.css">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>PreparaElite
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 d-none d-lg-block">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4"><i class="bi bi-speedometer2 me-2"></i>Dashboard</h5>
                        <ul class="nav flex-column" id="adminMenu">
                            <li class="nav-item mb-2">
                                <a class="nav-link active admin-nav-link" href="#" data-form="professor">
                                    <i class="bi bi-person-plus me-2"></i>Adicionar Professor
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link admin-nav-link" href="#" data-form="banner">
                                    <i class="bi bi-image me-2"></i>Gerenciar Banners
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link admin-nav-link" href="#" data-form="cadastros">
                                    <i class="bi bi-people me-2"></i>Visualizar Cadastros
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link admin-nav-link" href="#" data-form="vendas">
                                    <i class="bi bi-cash-coin me-2"></i>Relatório de Vendas
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link admin-nav-link" href="#" data-form="cursos">
                                    <i class="bi bi-book me-2"></i>Gerenciar Cursos
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link admin-nav-link" href="#" data-form="estatisticas">
                                    <i class="bi bi-bar-chart me-2"></i>Estatísticas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Main Panel -->
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-bottom">
                        <h4 class="mb-0"><i class="bi bi-gear me-2"></i>Gerenciamento Geral</h4>
                    </div>
                    
                    <div class="card-body">
                        <!-- Tabs Mobile -->
                        <ul class="nav nav-pills mb-4 d-lg-none">
                            <li class="nav-item">
                                <a class="nav-link active admin-nav-link" data-form="professor">
                                    <i class="bi bi-person-plus"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link admin-nav-link" data-form="banner">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link admin-nav-link" data-form="cadastros">
                                    <i class="bi bi-people"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link admin-nav-link" data-form="vendas">
                                    <i class="bi bi-cash-coin"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link admin-nav-link" data-form="cursos">
                                    <i class="bi bi-book"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link admin-nav-link" data-form="estatisticas">
                                    <i class="bi bi-bar-chart"></i>
                                </a>
                            </li>
                        </ul>
                        
                        <!-- Formulário de Professor -->
                        <form id="form-professor" method="post" action="../Control/TeacherController.php" class="<?php echo isset($_POST['tipo']) ? 'd-none' : 'd-block'; ?>">
                            <h5 class="mb-4"><i class="bi bi-person-plus me-2"></i>Adicionar Novo Professor</h5>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Senha</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">CPF</label>
                                    <input type="text" class="form-control" id="cpf" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Formação</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Salário</label>
                                    <div class="input-group">
                                        <span class="input-group-text">R$</span>
                                        <input type="number" class="form-control" step="0.01" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Foto de Perfil</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="bi bi-save me-2"></i>Cadastrar Professor
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Formulário de Banner -->
                        <form id="form-banner" method="post" action="../Control/BannerController.php" class="d-none">
                            <h5 class="mb-4"><i class="bi bi-image me-2"></i>Adicionar Novo Banner</h5>
                            
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <label class="form-label">Título do Banner</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label">Ordem de Exibição</label>
                                    <input type="number" class="form-control" min="1" value="1">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Imagem (1920x600px)</label>
                                    <input type="file" class="form-control" accept="image/*" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Link de Destino</label>
                                    <input type="url" class="form-control" placeholder="https://">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Data de Início</label>
                                    <input type="date" class="form-control">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Data de Término</label>
                                    <input type="date" class="form-control">
                                </div>
                                
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="bi bi-save me-2"></i>Salvar Banner
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Visualização de Cadastros -->
                        <div id="form-cadastros" class="d-none">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5><i class="bi bi-people me-2"></i>Visualizar Cadastros</h5>
                                
                                <form method="post" class="d-flex" id="form-consulta">
                                    <select name="tipo" id="tipo" class="form-select me-2" style="width: 200px;" onchange="submitForm('#form-consulta')">
                                        <option value="usuarios" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'usuarios' ? 'selected' : ''); ?>>Usuários</option>
                                        <option value="professores" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'professores' ? 'selected' : ''); ?>>Professores</option>
                                    </select>
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="bi bi-download"></i> Exportar
                                    </button>
                                </form>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <?php 
                                            include('../Control/admController.php');
                                            $obj = new AdmController();
                                            if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'){
                                                $data = $obj->listarProfessores(); 
                                            ?>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Nascimento</th>
                                                <th>CPF</th>
                                                <th>Salário</th>
                                                <th>Ações</th>
                                            <?php } else { 
                                                $data = $obj->listarUsuarios(); ?>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Tipo</th>
                                                <th>Nascimento</th>
                                                <th>Ações</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($data): ?>
                                            <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <?php if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'): ?>
                                                        <td><?php echo $row->getCodigo(); ?></td>
                                                        <td><?php echo $row->getNome(); ?></td>
                                                        <td><?php echo $row->getEmail(); ?></td>
                                                        <td>
                                                            <img src="<?php echo $row->getFoto(); ?>" alt="Foto" class="rounded-circle" width="40" height="40">
                                                        </td>
                                                        <td><?php echo date('d/m/Y', strtotime($row->getDataNascimento())); ?></td>
                                                        <td><?php echo $row->getCPF(); ?></td>
                                                        <td>R$ <?php echo number_format($row->getSalario(), 2, ',', '.'); ?></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-outline-danger">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </td>
                                                    <?php else: ?>
                                                        <td><?php echo $row->getId(); ?></td>
                                                        <td><?php echo $row->getEmail(); ?></td>
                                                        <td><?php echo $row->getNome(); ?></td>
                                                        <td><?php echo $row->getCPF(); ?></td>
                                                        <td>
                                                            <span class="badge bg-<?php echo $row->getTipoUs() === 'admin' ? 'danger' : 'primary'; ?>">
                                                                <?php echo $row->getTipoUs(); ?>
                                                            </span>
                                                        </td>
                                                        <td><?php echo date('d/m/Y', strtotime($row->getDataNascimento())); ?></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-outline-danger">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="<?php echo isset($_POST['tipo']) && $_POST['tipo'] === 'professores' ? '8' : '7'; ?>" class="text-center py-4">
                                                    <div class="text-muted">
                                                        <i class="bi bi-exclamation-circle fs-4"></i>
                                                        <p class="mb-0">Nenhum registro encontrado</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Relatório de Vendas -->
                        <div id="form-vendas" class="d-none">
                            <h5 class="mb-4"><i class="bi bi-cash-coin me-2"></i>Relatório de Vendas</h5>
                            
                            <div class="row g-3 mb-4">
                                <div class="col-md-3">
                                    <label class="form-label">Data Inicial</label>
                                    <input type="date" class="form-control" id="dataInicioVendas">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Data Final</label>
                                    <input type="date" class="form-control" id="dataFimVendas">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Tipo de Venda</label>
                                    <select class="form-select" id="tipoVenda">
                                        <option value="todos">Todos</option>
                                        <option value="cursos">Cursos</option>
                                        <option value="assinaturas">Assinaturas</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex align-items-end">
                                    <button class="btn btn-primary w-100" onclick="filtrarVendas()">
                                        <i class="bi bi-funnel me-2"></i>Filtrar
                                    </button>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Data</th>
                                            <th>Cliente</th>
                                            <th>Produto</th>
                                            <th>Valor</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabelaVendas">
                                        <!-- Dados serão carregados via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Gerenciamento de Cursos -->
                        <div id="form-cursos" class="d-none">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5><i class="bi bi-book me-2"></i>Gerenciar Cursos</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cursoModal">
                                    <i class="bi bi-plus-circle me-2"></i>Novo Curso
                                </button>
                            </div>
                            
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Buscar curso..." id="buscaCurso">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="filtroCategoria">
                                        <option value="">Todas categorias</option>
                                        <option>Direito</option>
                                        <option>Matemática</option>
                                        <option>Informática</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="filtroStatus">
                                        <option value="">Todos status</option>
                                        <option>Ativo</option>
                                        <option>Inativo</option>
                                        <option>Em Revisão</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-secondary w-100" onclick="filtrarCursos()">
                                        <i class="bi bi-filter"></i> Filtrar
                                    </button>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Professor</th>
                                            <th>Duração</th>
                                            <th>Preço</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabelaCursos">
                                        <!-- Dados serão carregados via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Estatísticas -->
                        <div id="form-estatisticas" class="d-none">
                            <h5 class="mb-4"><i class="bi bi-bar-chart me-2"></i>Estatísticas da Plataforma</h5>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-3">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-muted">Total de Alunos</h6>
                                                    <h3 class="mb-0" id="totalAlunos">1,248</h3>
                                                </div>
                                                <div class="bg-primary bg-opacity-10 p-3 rounded">
                                                    <i class="bi bi-people-fill text-primary fs-4"></i>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <span class="text-success"><i class="bi bi-arrow-up"></i> <span id="crescimentoAlunos">12.5</span>%</span>
                                                <span class="text-muted ms-2">últimos 30 dias</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Outros cards de métricas... -->
                            </div>
                            
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h6 class="card-title">Vendas Mensais</h6>
                                            <canvas id="salesChart" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h6 class="card-title">Categorias Mais Populares</h6>
                                            <canvas id="categoriesChart" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Adicionar/Editar Curso -->
    <div class="modal fade" id="cursoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCursoTitulo">Adicionar Novo Curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formCurso">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nome do Curso</label>
                                <input type="text" class="form-control" id="cursoNome" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Categoria</label>
                                <select class="form-select" id="cursoCategoria" required>
                                    <option value="">Selecione...</option>
                                    <option>Direito</option>
                                    <option>Matemática</option>
                                    <option>Informática</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Professor</label>
                                <select class="form-select" id="cursoProfessor" required>
                                    <option value="">Selecione...</option>
                                    <option>Carlos Silva</option>
                                    <option>Ana Oliveira</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nível</label>
                                <select class="form-select" id="cursoNivel" required>
                                    <option value="">Selecione...</option>
                                    <option>Iniciante</option>
                                    <option>Intermediário</option>
                                    <option>Avançado</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Duração (horas)</label>
                                <input type="number" class="form-control" id="cursoDuracao" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Preço</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="number" step="0.01" class="form-control" id="cursoPreco" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Status</label>
                                <select class="form-select" id="cursoStatus" required>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                    <option value="revisao">Em Revisão</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Descrição</label>
                                <textarea class="form-control" rows="3" id="cursoDescricao" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Imagem do Curso</label>
                                <input type="file" class="form-control" id="cursoImagem" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="salvarCurso">Salvar Curso</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 PreparaElite Concursos. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Versão 1.0.0</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    
    <script>
        // Dados de exemplo
        const cursos = [
            { id: 1, nome: "Direito Constitucional", categoria: "Direito", professor: "Carlos Silva", 
              duracao: "40h", preco: 299.90, status: "ativo" },
            { id: 2, nome: "Matemática Financeira", categoria: "Matemática", professor: "Ana Oliveira", 
              duracao: "30h", preco: 249.90, status: "ativo" },
            { id: 3, nome: "Informática para Concursos", categoria: "Informática", professor: "Roberto Santos", 
              duracao: "25h", preco: 199.90, status: "revisao" }
        ];
        
        const vendas = [
            { id: 1001, data: "05/12/2024", cliente: "João Silva", produto: "Curso de Direito", 
              valor: 299.90, status: "aprovado" },
            { id: 1002, data: "04/12/2024", cliente: "Maria Oliveira", produto: "Curso de Matemática", 
              valor: 249.90, status: "aprovado" },
            { id: 1003, data: "03/12/2024", cliente: "Carlos Souza", produto: "Pacote Completo", 
              valor: 499.90, status: "pendente" }
        ];
        
        // Inicialização
        $(document).ready(function(){
            // Máscara para CPF
            $('#cpf').mask('000.000.000-00', {reverse: false});
            
            // Alternar visibilidade da senha
            $('#togglePassword').click(function(){
                const passwordField = $(this).siblings('input');
                const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);
                $(this).find('i').toggleClass('bi-eye bi-eye-slash');
            });
            
            // Navegação entre abas
            $('.admin-nav-link').click(function(e){
                e.preventDefault();
                const formId = $(this).data('form');
                showForm(formId);
            });
            
            // Carregar dados iniciais
            carregarCursos();
            carregarVendas();
            
            // Inicializar com o formulário correto
            <?php if (isset($_POST['tipo'])): ?>
                showForm('cadastros');
            <?php else: ?>
                showForm('professor');
            <?php endif; ?>
        });
        
        // Função para mostrar os formulários
        function showForm(formType) {
            // Esconde todos os formulários
            $('#form-professor, #form-banner, #form-cadastros, #form-vendas, #form-cursos, #form-estatisticas').addClass('d-none');
            
            // Mostra o formulário selecionado
            $('#form-' + formType).removeClass('d-none');
            
            // Atualiza a navegação ativa
            $('.admin-nav-link').removeClass('active');
            $(`.admin-nav-link[data-form="${formType}"]`).addClass('active');
            
            // Se for estatísticas, inicializa os gráficos
            if(formType === 'estatisticas') {
                initCharts();
            }
        }
        
        // Carregar cursos na tabela
        function carregarCursos(filtro = '') {
            const tabela = $('#tabelaCursos');
            tabela.empty();
            
            const cursosFiltrados = filtro ? 
                cursos.filter(curso => 
                    curso.nome.toLowerCase().includes(filtro.toLowerCase()) ||
                    curso.categoria.toLowerCase().includes(filtro.toLowerCase())
                ) : cursos;
            
            cursosFiltrados.forEach(curso => {
                const statusClass = curso.status === 'ativo' ? 'success' : 
                                  curso.status === 'inativo' ? 'secondary' : 'warning';
                const statusText = curso.status === 'ativo' ? 'Ativo' : 
                                  curso.status === 'inativo' ? 'Inativo' : 'Em Revisão';
                
                tabela.append(`
                    <tr>
                        <td>${curso.id}</td>
                        <td>${curso.nome}</td>
                        <td>${curso.categoria}</td>
                        <td>${curso.professor}</td>
                        <td>${curso.duracao}</td>
                        <td>R$ ${curso.preco.toFixed(2)}</td>
                        <td><span class="badge bg-${statusClass}">${statusText}</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1" onclick="editarCurso(${curso.id})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="excluirCurso(${curso.id})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                `);
            });
        }
        
        // Carregar vendas na tabela
        function carregarVendas() {
            const tabela = $('#tabelaVendas');
            tabela.empty();
            
            vendas.forEach(venda => {
                const statusClass = venda.status === 'aprovado' ? 'success' : 
                                   venda.status === 'pendente' ? 'warning' : 'secondary';
                const statusText = venda.status === 'aprovado' ? 'Aprovado' : 
                                  venda.status === 'pendente' ? 'Pendente' : 'Processando';
                
                tabela.append(`
                    <tr>
                        <td>#${venda.id}</td>
                        <td>${venda.data}</td>
                        <td>${venda.cliente}</td>
                        <td>${venda.produto}</td>
                        <td>R$ ${venda.valor.toFixed(2)}</td>
                        <td><span class="badge bg-${statusClass}">${statusText}</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-receipt"></i> Detalhes
                            </button>
                        </td>
                    </tr>
                `);
            });
        }
        
        // Filtrar cursos
        function filtrarCursos() {
            const busca = $('#buscaCurso').val();
            const categoria = $('#filtroCategoria').val();
            const status = $('#filtroStatus').val();
            
            const cursosFiltrados = cursos.filter(curso => {
                const matchBusca = curso.nome.toLowerCase().includes(busca.toLowerCase()) || 
                                  curso.professor.toLowerCase().includes(busca.toLowerCase());
                const matchCategoria = categoria ? curso.categoria === categoria : true;
                const matchStatus = status ? 
                    (status === 'Ativo' ? curso.status === 'ativo' :
                     status === 'Inativo' ? curso.status === 'inativo' : curso.status === 'revisao') : true;
                
                return matchBusca && matchCategoria && matchStatus;
            });
            
            const tabela = $('#tabelaCursos');
            tabela.empty();
            
            cursosFiltrados.forEach(curso => {
                const statusClass = curso.status === 'ativo' ? 'success' : 
                                  curso.status === 'inativo' ? 'secondary' : 'warning';
                const statusText = curso.status === 'ativo' ? 'Ativo' : 
                                  curso.status === 'inativo' ? 'Inativo' : 'Em Revisão';
                
                tabela.append(`
                    <tr>
                        <td>${curso.id}</td>
                        <td>${curso.nome}</td>
                        <td>${curso.categoria}</td>
                        <td>${curso.professor}</td>
                        <td>${curso.duracao}</td>
                        <td>R$ ${curso.preco.toFixed(2)}</td>
                        <td><span class="badge bg-${statusClass}">${statusText}</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1" onclick="editarCurso(${curso.id})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="excluirCurso(${curso.id})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                `);
            });
        }
        
        // Filtrar vendas
        function filtrarVendas() {
            // Implementação real buscaria do servidor com os filtros
            alert('Filtrando vendas com os parâmetros selecionados...');
        }
        
        // Editar curso
        function editarCurso(id) {
            const curso = cursos.find(c => c.id === id);
            if (curso) {
                $('#modalCursoTitulo').text('Editar Curso');
                $('#cursoNome').val(curso.nome);
                $('#cursoCategoria').val(curso.categoria);
                $('#cursoProfessor').val(curso.professor);
                $('#cursoNivel').val('intermediario'); // Exemplo
                $('#cursoDuracao').val(parseInt(curso.duracao));
                $('#cursoPreco').val(curso.preco);
                $('#cursoStatus').val(curso.status);
                $('#cursoDescricao').val(`Descrição detalhada do curso ${curso.nome}`);
                
                $('#salvarCurso').off('click').on('click', function() {
                    salvarCurso(id);
                });
                
                new bootstrap.Modal(document.getElementById('cursoModal')).show();
            }
        }
        
        // Salvar curso (edição ou novo)
        function salvarCurso(id) {
            alert(`Curso ${id ? 'atualizado' : 'adicionado'} com sucesso!`);
            $('#cursoModal').modal('hide');
        }
        
        // Excluir curso
        function excluirCurso(id) {
            if (confirm(`Tem certeza que deseja excluir o curso ${id}?`)) {
                alert(`Curso ${id} excluído com sucesso!`);
                // Atualizar a tabela após exclusão
                carregarCursos();
            }
        }
        
        // Inicializar gráficos
        function initCharts() {
            // Gráfico de vendas mensais
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    datasets: [{
                        label: 'Vendas Mensais (R$)',
                        data: [12500, 19000, 15300, 17800, 21500, 19200, 22800, 24500, 21000, 26300, 28700, 31500],
                        backgroundColor: 'rgba(13, 110, 253, 0.1)',
                        borderColor: 'rgba(13, 110, 253, 1)',
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            
            // Gráfico de categorias
            const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
            new Chart(categoriesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Direito', 'Matemática', 'Informática', 'Português', 'Administração'],
                    datasets: [{
                        data: [35, 25, 20, 15, 5],
                        backgroundColor: [
                            '#0d6efd',
                            '#198754',
                            '#ffc107',
                            '#fd7e14',
                            '#6f42c1'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right',
                        }
                    }
                }
            });
        }
        
        // Função para submeter o formulário
        function submitForm(id) {
            $(id).submit();
        }
    </script>
</body>
</html>