<?php
require_once '../Model/BancodeDados.php';
require_once '../Model/Professores.php';
require_once '../Model/Usuarios.php';

class AdmController {
    public function index() {
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 'professores';
        echo "Tipo selecionado: " . $tipo . "<br>";  // Verifique o tipo selecionado

        if ($tipo === 'professores') {
            $data = $this->listarProfessores();
        } else {
            $data = $this->listarUsuarios();
        }

        include '../View/Adm.php';
    }

    public function listarProfessores() {
        $conn = ConexaoBancoDados::getInstance()->conectar();
        $query = "SELECT * FROM professores";
        $result = $conn->query($query);

        if ($result === false) {
            die("Erro na consulta de professores: " . $conn->error);
        }

        $professores = [];
        while ($row = $result->fetch_assoc()) {
            $professores[] = new Professores(
                $row['codigo'],
                $row['email'],
                '',
                $row['nome'],
                $row['cpf'],
                $row['foto'],
                $row['formacao'],
                $row['data_nascimento'],
                floatval($row['salario'])
            );
        }
        echo "Professores encontrados: " . count($professores) . "<br>";  // Verifica o número de professores
        return $professores;
    }

    public function listarUsuarios() {
        $conn = ConexaoBancoDados::getInstance()->conectar();
        $query = "SELECT * FROM usuarios";
        $result = $conn->query($query);

        if ($result === false) {
            die("Erro na consulta de usuários: " . $conn->error);
        }

        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = new Usuarios(
                $row['id'],
                $row['email'],
                '',  // Senha, não é usada aqui
                $row['nome'],
                $row['cpf'],
                $row['tipous'],
                $row['datanasc'],
                $row['descricao'],
                $row['nacionalidade']
            );
        }
        echo "Usuários encontrados: " . count($usuarios) . "<br>";  // Verifica o número de usuários
        return $usuarios;
    }
}
?>
