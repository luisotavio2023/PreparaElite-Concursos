<!doctype html>
<html lang="pt-BR">
<head>
    <title>Aba do Professor - PreparaElite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <style>
        .btn-custom {
            background-color: white;
            border: 2px solid #004aad;
            color: #004aad;
            font-size: 1.2rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-custom:hover, .btn-custom:focus, .btn-custom.active {
            background-color: #004aad;
            color: white;
        }

        .icon {
            font-size: 2rem;
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
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

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row text-center w-100">
            <!-- Button and Modal for Aulas Online -->
            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#aulasOnlineModal">
                    <i class="lni lni-graduation icon"></i>
                    Aulas online
                </button>
            </div>
            <div class="modal fade" id="aulasOnlineModal" tabindex="-1" role="dialog" aria-labelledby="aulasOnlineLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="aulasOnlineLabel">Aulas Online</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Conteúdo da Modal de Aulas Online -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button and Modal for Arquivos -->
            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#arquivosModal">
                    <i class="lni lni-folder icon"></i>
                    Arquivos
                </button>
            </div>
            <div class="modal fade" id="arquivosModal" tabindex="-1" role="dialog" aria-labelledby="arquivosLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="arquivosLabel">Arquivos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Conteúdo da Modal de Arquivos -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button and Modal for Lançar Notas -->
            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#lancarNotasModal">
                    <i class="lni lni-pencil-alt icon"></i>
                    Lançar notas
                </button>
            </div>
            <div class="modal fade" id="lancarNotasModal" tabindex="-1" role="dialog" aria-labelledby="lancarNotasLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="lancarNotasLabel">Lançar Notas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Conteúdo da Modal de Lançar Notas -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat for remaining buttons and modals -->
            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#notificacoesModal">
                    <i class="lni lni-alarm icon"></i>
                    Notificações
                </button>
            </div>
            <div class="modal fade" id="notificacoesModal" tabindex="-1" role="dialog" aria-labelledby="notificacoesLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notificacoesLabel">Notificações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Conteúdo da Modal de Notificações -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#perfilModal">
                    <i class="lni lni-user icon"></i>
                    Perfil do Professor
                </button>
            </div>
            <div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="perfilLabel">Perfil do Professor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <img></img>
                                <input type="text" disabled>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-3">
                <button class="btn btn-custom w-100 h-100 py-5" data-toggle="modal" data-target="#dashboardModal">
                    <i class="lni lni-dashboard icon"></i>
                    Dashboard Geral
                </button>
            </div>
            <div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dashboardLabel">Dashboard Geral</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Conteúdo da Modal do Dashboard Geral -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
