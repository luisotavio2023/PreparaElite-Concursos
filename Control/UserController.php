<?php

require_once "../Model/BancodeDados.php";
require_once "../Model/Usuarios.php";

class UserController {

    private $conn;

    public function __construct() {
        $this->conn = ConexaoBancoDados::getInstance()->conectar();
    }

    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Pegando dados do formulário
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';
            $nome = $_POST['nome'] ?? '';
            $cpf = $_POST['cpf'] ?? '';
            $nacionalidade = $_POST['nacionalidade'] ?? '';
            $dataNascimento = $_POST['dataNascimento'] ?? '';
            $descricao = $_POST['descricao'] ?? '';

            // Validação básica dos dados
            if (empty($email) || empty($senha) || empty($nome) || empty($cpf)) {
                echo "Todos os campos são obrigatórios!";
                return;
            }

            // Criar uma instância do modelo de usuário
            $usuario = new Usuarios(null, $email, $senha, $nome, $cpf, 'Aluno', $nacionalidade, $dataNascimento);
            $usuario->setDescricao($descricao);

            // Tentar registrar o usuário
            try {
                $usuario->registrar();
                echo "Usuário registrado com sucesso!";
            } catch (Exception $e) {
                echo "Erro ao registrar usuário: " . $e->getMessage();
            }
        }
    }

    public function CadastroCurriculo() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Armazenar os dados do formulário em variáveis
            $name = $_POST["name"] ?? '';
            $email = $_POST["email"] ?? '';
            $position = $_POST["position"] ?? '';

            // Armazenar o arquivo enviado em uma variável
            $arquivo = $_FILES["resume"] ?? null;

            if ($arquivo && $arquivo["error"] == UPLOAD_ERR_OK) {
                $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));

                if (in_array($extensao, ["docx", "doc", "pdf"])) {
                    $nomeUnico = uniqid() . "." . $extensao;
                    $destino = "uploads/" . $nomeUnico;

                    if (move_uploaded_file($arquivo["tmp_name"], $destino)) {
                        $stmt = $this->conn->prepare("INSERT INTO candidatos (nome, email, cargo, curriculum) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param("ssss", $name, $email, $position, $destino);

                        if ($stmt->execute()) {
                            echo "<div class='alert alert-success' role='alert' style='position:fixed; bottom:0; right:0; z-index:1000;'>Currículo enviado com sucesso!</div>";
                        } else {
                            echo "Erro ao inserir no banco de dados: " . $stmt->error;
                        }

                        $stmt->close();
                    } else {
                        echo "Erro ao mover o arquivo.";
                    }
                } else {
                    echo "Formato de arquivo inválido. Aceitamos apenas arquivos DOCX, DOC e PDF.";
                }
            } else {
                echo "Erro ao enviar o arquivo.";
            }
        }
    }
}

?>