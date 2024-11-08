<?php
if (!empty($data)) {
    echo "<div style='color: green; text-align: center;'>Data loaded successfully!</div>";
} else {
    echo "<div style='color: red; text-align: center;'>No data found.</div>";
}
?>


<!doctype html>
<html lang="pt-BR">
<head>
    <title>Administrador - PreparaElite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div style="background-color: #004aad; height: 50px;"></div>

    <nav class="navbar navbar-expand-lg" style="background-color: #007bff;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#" style="color: white;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white;">Destaques</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white;">Preços</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#" style="color: white;">Desativado</a></li>
            </ul>
        </div>
    </nav>

    <div class="">
        <div class="d-flex justify-content-center py-3">
            <h2>Gerenciamento de Usuários</h2>
        </div>

        <div class="container">
            <form method="post" class="mb-3">
                <div class="form-group">
                    <label for="tipo">Selecione o tipo:</label>
                    <select name="tipo" id="tipo" class="form-control" onchange="this.form.submit()">
                        <option value="professores" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'professores') ? 'selected' : ''; ?>>Professores</option>
                        <option value="usuarios" <?php echo (isset($_POST['tipo']) && $_POST['tipo'] === 'usuarios') ? 'selected' : ''; ?>>Usuários</option>
                    </select>
                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <?php if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'): ?>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Salário</th>
                        <?php else: ?>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Tipo de Usuário</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Nacionalidade</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                            <tr>
                                <?php if (isset($_POST['tipo']) && $_POST['tipo'] === 'professores'): ?>
                                    <th scope="row"><?php echo $row->getId(); ?></th>
                                    <td><?php echo $row->getNome(); ?></td>
                                    <td><?php echo $row->getEmail(); ?></td>
                                    <td><?php echo $row->getSenha(); ?></td>
                                    <td><img src="<?php echo $row->getFoto(); ?>" alt="Foto" style="width: 50px; height: 50px;"></td>
                                    <td><?php echo date('d/m/Y', strtotime($row->getDataNascimento())); ?></td>
                                    <td><?php echo $row->getCPF(); ?></td>
                                    <td><?php echo number_format($row->getSalario(), 2, ',', '.'); ?></td>
                                <?php else: ?>
                                    <th scope="row"><?php echo $row->getId(); ?></th>
                                    <td><?php echo $row->getEmail(); ?></td>
                                    <td><?php echo $row->getSenha(); ?></td>
                                    <td><?php echo $row->getNome(); ?></td>
                                    <td><?php echo $row->getCPF(); ?></td>
                                    <td><?php echo $row->getTipoUs(); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($row->getDataNasc())); ?></td>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
