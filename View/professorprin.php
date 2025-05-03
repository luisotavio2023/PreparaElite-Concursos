<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Professor - PreparaElite</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/pt-br.js"></script>
</head>
<body class="bg-light" style="font-family: 'Poppins', sans-serif;">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-primary" style="width: 280px; height: 100vh; position: fixed;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">
                <i class="fas fa-graduation-cap me-2"></i>
                <span class="fw-bold">PreparaElite</span>
            </h4>
            <button class="btn btn-sm btn-outline-light d-lg-none" id="sidebarToggle">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="text-center mb-4">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Professor" class="rounded-circle mb-2" width="80">
            <h5 class="mb-1">Prof. Carlos Silva</h5>
            <small class="text-white-50">Direito Constitucional</small>
        </div>
        
        <hr class="bg-light opacity-25 my-4">
        
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active bg-white text-primary" href="#">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-chalkboard-teacher me-2"></i>
                    Aulas Online
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-folder-open me-2"></i>
                    Materiais Didáticos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-clipboard-check me-2"></i>
                    Avaliações
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-users me-2"></i>
                    Turmas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-calendar-alt me-2"></i>
                    Calendário
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-envelope me-2"></i>
                    Mensagens
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-cog me-2"></i>
                    Configurações
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 280px;">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-link d-lg-none" id="sidebarToggleBtn">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="d-flex align-items-center ms-auto">
                    <div class="dropdown me-3">
                        <button class="btn btn-light position-relative" type="button" id="notificationsDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                            <li><h6 class="dropdown-header">Notificações</h6></li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">Nova tarefa avaliada</p>
                                            <small class="text-muted">5 minutos atrás</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-calendar-alt text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">Aula agendada para amanhã</p>
                                            <small class="text-muted">1 hora atrás</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="#">Ver todas</a></li>
                        </ul>
                    </div>
                    
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Professor" class="rounded-circle me-2" width="40">
                            <span class="d-none d-md-inline">Prof. Carlos</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Configurações</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container-fluid p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Dashboard do Professor</h2>
                <div>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> Nova Aula
                    </button>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-start border-primary border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Turmas Ativas</h6>
                                    <h3 class="mb-0">5</h3>
                                </div>
                                <div class="bg-primary bg-opacity-10 p-3 rounded">
                                    <i class="fas fa-users text-primary"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="fas fa-caret-up me-1"></i> 12%</span>
                                <span class="text-muted ms-2">vs último mês</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-start border-success border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Alunos</h6>
                                    <h3 class="mb-0">127</h3>
                                </div>
                                <div class="bg-success bg-opacity-10 p-3 rounded">
                                    <i class="fas fa-user-graduate text-success"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="fas fa-caret-up me-1"></i> 8%</span>
                                <span class="text-muted ms-2">vs último mês</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-start border-warning border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Aulas Pendentes</h6>
                                    <h3 class="mb-0">3</h3>
                                </div>
                                <div class="bg-warning bg-opacity-10 p-3 rounded">
                                    <i class="fas fa-chalkboard text-warning"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-danger"><i class="fas fa-caret-down me-1"></i> 2%</span>
                                <span class="text-muted ms-2">vs última semana</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-start border-info border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Média de Notas</h6>
                                    <h3 class="mb-0">8.2</h3>
                                </div>
                                <div class="bg-info bg-opacity-10 p-3 rounded">
                                    <i class="fas fa-star text-info"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="fas fa-caret-up me-1"></i> 0.5</span>
                                <span class="text-muted ms-2">vs último bimestre</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content Row -->
            <div class="row g-4">
                <!-- Performance Chart -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0">
                            <h5 class="mb-0">Desempenho das Turmas</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="performanceChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activities -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Atividades Recentes</h5>
                            <a href="#" class="btn btn-sm btn-link">Ver todas</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary bg-opacity-10 p-2 rounded">
                                                <i class="fas fa-check-circle text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Tarefa avaliada</h6>
                                            <p class="mb-0 small text-muted">Direito Constitucional - Turma A</p>
                                            <small class="text-muted">Hoje, 10:45</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-success bg-opacity-10 p-2 rounded">
                                                <i class="fas fa-comment-alt text-success"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Novo comentário</h6>
                                            <p class="mb-0 small text-muted">João Silva na tarefa de Processo Penal</p>
                                            <small class="text-muted">Ontem, 16:30</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-info bg-opacity-10 p-2 rounded">
                                                <i class="fas fa-file-upload text-info"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Material adicionado</h6>
                                            <p class="mb-0 small text-muted">Slides - Direito Administrativo</p>
                                            <small class="text-muted">Ontem, 14:15</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-warning bg-opacity-10 p-2 rounded">
                                                <i class="fas fa-calendar-alt text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Aula agendada</h6>
                                            <p class="mb-0 small text-muted">Processo Civil - 15/06 às 19:00</p>
                                            <small class="text-muted">2 dias atrás</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Calendar -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0">
                            <h5 class="mb-0">Calendário de Aulas</h5>
                        </div>
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Students -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Alunos Recentes</h5>
                            <a href="#" class="btn btn-sm btn-link">Ver todos</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Aluno</th>
                                            <th>Turma</th>
                                            <th>Progresso</th>
                                            <th>Nota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="40">
                                                    <div>
                                                        <h6 class="mb-0">Ana Oliveira</h6>
                                                        <small class="text-muted">ana.oliveira@email.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Direito Penal</td>
                                            <td>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">9.2</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle me-3" width="40">
                                                    <div>
                                                        <h6 class="mb-0">Carlos Mendes</h6>
                                                        <small class="text-muted">carlos.mendes@email.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Processo Civil</td>
                                            <td>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-primary" style="width: 72%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">7.8</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://randomuser.me/api/portraits/women/33.jpg" class="rounded-circle me-3" width="40">
                                                    <div>
                                                        <h6 class="mb-0">Juliana Santos</h6>
                                                        <small class="text-muted">juliana.santos@email.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Direito Constitucional</td>
                                            <td>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" style="width: 65%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning">6.5</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="40">
                                                    <div>
                                                        <h6 class="mb-0">Roberto Almeida</h6>
                                                        <small class="text-muted">roberto.almeida@email.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Direito Administrativo</td>
                                            <td>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-danger" style="width: 45%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger">4.8</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sidebar Toggle
        document.getElementById('sidebarToggleBtn').addEventListener('click', function() {
            document.querySelector('.bg-primary').classList.toggle('d-none');
            document.querySelector('.main-content').classList.toggle('ms-0');
        });
        
        // Performance Chart
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [
                    {
                        label: 'Turma A',
                        data: [7.2, 7.5, 7.8, 8.1, 8.0, 8.3, 8.5, 8.7, 8.6, 8.8, 8.9, 9.0],
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Turma B',
                        data: [6.8, 7.0, 7.2, 7.5, 7.7, 7.9, 8.1, 8.2, 8.4, 8.5, 8.6, 8.7],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Turma C',
                        data: [6.5, 6.7, 6.9, 7.1, 7.3, 7.5, 7.6, 7.8, 7.9, 8.0, 8.1, 8.2],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 6,
                        max: 10
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                }
            }
        });
        
        // Calendar
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'pt-br',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    {
                        title: 'Aula - Direito Constitucional',
                        start: new Date(new Date().setHours(10, 0, 0, 0)),
                        end: new Date(new Date().setHours(12, 0, 0, 0)),
                        backgroundColor: '#3b82f6',
                        borderColor: '#3b82f6'
                    },
                    {
                        title: 'Reunião Pedagógica',
                        start: new Date(new Date().setDate(new Date().getDate() + 2)),
                        start: new Date(new Date().setHours(14, 0, 0, 0)),
                        end: new Date(new Date().setHours(15, 30, 0, 0)),
                        backgroundColor: '#10b981',
                        borderColor: '#10b981'
                    },
                    {
                        title: 'Correção de Provas',
                        start: new Date(new Date().setDate(new Date().getDate() + 5)),
                        start: new Date(new Date().setHours(9, 0, 0, 0)),
                        end: new Date(new Date().setHours(11, 0, 0, 0)),
                        backgroundColor: '#f59e0b',
                        borderColor: '#f59e0b'
                    }
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>