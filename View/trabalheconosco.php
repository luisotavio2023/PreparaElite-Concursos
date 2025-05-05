<!doctype html>
<html lang="pt-BR">
<head>
    <title>Trabalhe Conosco - PreparaElite Concursos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background-color: #004aad;
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
        }
        
        .benefits-card {
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .benefits-card:hover {
            transform: translateY(-5px);
        }
        
        .form-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>PreparaElite
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="inicial.php"><i class="bi bi-house-door me-1"></i> Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-book me-1"></i> Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-info-circle me-1"></i> Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-briefcase me-1"></i> Trabalhe Conosco</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person me-1"></i> Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2" href="#"><i class="bi bi-cart3 me-1"></i> Carrinho</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Faça parte do nosso time!</h1>
            <p class="lead mb-4">Junte-se a uma equipe apaixonada por educação e transformação de vidas</p>
            <a href="#formulario" class="btn btn-light btn-lg px-4">
                <i class="bi bi-arrow-down-circle me-2"></i>Candidatar-se agora
            </a>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Por que trabalhar na PreparaElite?</h2>
            <p class="text-muted">Oferecemos um ambiente desafiador e recompensador para profissionais talentosos</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card benefits-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="bi bi-coin text-primary fs-3"></i>
                        </div>
                        <h4 class="card-title">Remuneração Competitiva</h4>
                        <p class="card-text">Salários acima do mercado e benefícios completos</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card benefits-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="bi bi-book text-primary fs-3"></i>
                        </div>
                        <h4 class="card-title">Desenvolvimento Profissional</h4>
                        <p class="card-text">Acesso a cursos e treinamentos gratuitos</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card benefits-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="bi bi-people text-primary fs-3"></i>
                        </div>
                        <h4 class="card-title">Ambiente Colaborativo</h4>
                        <p class="card-text">Trabalhe com uma equipe de profissionais experientes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Positions -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Vagas Disponíveis</h2>
            <p class="text-muted">Encontre a oportunidade perfeita para sua carreira</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="mb-1">Professor de Direito</h4>
                                <span class="badge bg-primary">Tempo Integral</span>
                            </div>
                            <span class="text-muted">São Paulo/SP</span>
                        </div>
                        <p class="card-text">Ministrar aulas para cursos preparatórios de concursos na área jurídica.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Experiência mínima de 2 anos</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Graduação em Direito</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Disponibilidade para aulas presenciais e online</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#formulario" class="btn btn-outline-primary">Candidatar-se</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="mb-1">Estagiário de TI</h4>
                                <span class="badge bg-success">Estágio</span>
                            </div>
                            <span class="text-muted">Remoto</span>
                        </div>
                        <p class="card-text">Auxiliar no desenvolvimento e manutenção da plataforma EAD.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Cursando Ciência da Computação ou afins</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Conhecimento em HTML, CSS e JavaScript</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Disponibilidade de 30h semanais</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#formulario" class="btn btn-outline-primary">Candidatar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section id="formulario" class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-section">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Formulário de Candidatura</h2>
                        <p class="text-muted">Preencha seus dados para se candidatar às nossas vagas</p>
                    </div>
                    
                    <form action="../Control/UserController.php" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="position" class="form-label">Cargo de Interesse</label>
                                <select class="form-select" id="position" name="position" required>
                                    <option value="" selected disabled>Selecione uma vaga</option>
                                    <option value="professor_direito">Professor de Direito</option>
                                    <option value="professor_matematica">Professor de Matemática</option>
                                    <option value="estagiario_ti">Estagiário de TI</option>
                                    <option value="tecnico_ti">Técnico em TI</option>
                                    <option value="auxiliar_administrativo">Auxiliar Administrativo</option>
                                    <option value="design_instrucional">Designer Instrucional</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="resume" class="form-label">Currículo (PDF ou DOCX)</label>
                                <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                <div class="form-text">Tamanho máximo: 5MB</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Mensagem (Opcional)</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Conte-nos por que você seria um ótimo candidato..."></textarea>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="consent" required>
                                    <label class="form-check-label" for="consent">
                                        Concordo com o tratamento dos meus dados conforme a <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Política de Privacidade</a>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="bi bi-send-fill me-2"></i>Enviar Candidatura
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Política de Privacidade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>1. Coleta de Dados</h6>
                    <p>Coletamos apenas os dados necessários para o processo seletivo, incluindo informações de contato, qualificações profissionais e currículo.</p>
                    
                    <h6 class="mt-4">2. Uso dos Dados</h6>
                    <p>Seus dados serão utilizados exclusivamente para fins de recrutamento e seleção. Não compartilhamos suas informações com terceiros sem seu consentimento.</p>
                    
                    <h6 class="mt-4">3. Armazenamento</h6>
                    <p>Mantemos seus dados em nossos sistemas por até 1 ano após o envio da candidatura, a menos que solicite a remoção antecipada.</p>
                    
                    <h6 class="mt-4">4. Seus Direitos</h6>
                    <p>Você tem o direito de acessar, corrigir ou solicitar a exclusão de seus dados a qualquer momento.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-3"><i class="bi bi-mortarboard-fill me-2"></i>PreparaElite</h5>
                    <p>Sua plataforma de preparação para concursos públicos de alto nível.</p>
                    <div class="d-flex">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube fs-5"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-3">Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Início</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Cursos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Planos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-3">Suporte</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Central de Ajuda</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Política de Privacidade</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Termos de Uso</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> contato@preparaelite.com</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> (11) 1234-5678</li>
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> São Paulo, SP</li>
                        <li class="mb-2"><i class="bi bi-whatsapp me-2"></i> (11) 98765-4321</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <small>&copy; 2024 PreparaElite Concursos. Todos os direitos reservados.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small>
                        <a href="#" class="text-white text-decoration-none me-2">Termos de Serviço</a>
                        <a href="#" class="text-white text-decoration-none">Política de Privacidade</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            // Máscara para telefone
            $('#phone').mask('(00) 00000-0000');
            
            // Validação do formulário
            $('form').submit(function(e) {
                const fileInput = $('#resume')[0];
                if (fileInput.files.length > 0) {
                    const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
                    if (fileSize > 5) {
                        alert('O arquivo deve ter no máximo 5MB');
                        e.preventDefault();
                    }
                }
            });
        });
    </script>
</body>
</html>