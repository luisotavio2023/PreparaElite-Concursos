<?php

require_once "../Model/BancodeDados.php";
require_once "../Model/Usuarios.php";
require_once "../Model/Professores.php";

class UserController {

    private $conn;

    public function __construct() {
        $this->conn = ConexaoBancoDados::getInstance()->conectar();
    }

    public function registrarUsuario($nome, $email, $senha, $cpf, $dataNascimento, $nacionalidade, $descricao) {
        // Criar uma instância do modelo de usuário
        $usuario = new Usuarios(0, $email, password_hash($senha, PASSWORD_BCRYPT), $nome, $cpf, 'Aluno', $nacionalidade, $dataNascimento);
        $usuario->setDescricao($descricao);
        // Tentar registrar o usuário
        try {
            $usuario->registrar();
            return true;
        } catch (Exception $e) {
           return false;
        }
    }

    public function login($email, $senha) {
        // Criar os objetos de usuário e professor com os dados fornecidos
        $usuario = new Usuarios(0, $email, $senha, "", "", '', "", "");
        $professor = new Professores(0, $email, $senha, "", "", "", "", "");
    
        // Tentar acessar
        try {
            // Verificar se o usuário é válido
            if ($usuario->acessar()) {
                // Redirecionar para a página de usuário comum (ex: inicial.php)
                header("Location: ../View/inicial.php");
                exit; // Parar a execução do código após o redirecionamento
            } 
            // Verificar se o professor é válido
            else if ($professor->acessar()) {
                // Redirecionar para a página do professor (ex: professorprin.php)
                header("Location: ../View/professorprin.php");
                exit; // Parar a execução do código após o redirecionamento
            } else {
                // Caso o login falhe (nenhum usuário ou professor encontrado)
                return false;
            }
        } catch (Exception $e) {
            // Caso haja erro na execução da consulta ou outra exceção
            return false;
        }
    }
    
    
    

    public function CadastroCurriculo() {
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $objController = new UserController();

    // Verificar se é uma tentativa de registro
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpf']) && isset($_POST['datanasc'])) {
        // Registrar Usuário
        try {
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $senha = $_POST['password'];
            $cpf = $_POST['cpf'];
            $dataNascimento = $_POST['datanasc'];
            $descricao = $_POST['descricao'];
            $nacionalidade = $_POST['nacionalidade'];
            $objController->registrarUsuario($nome, $email, $senha, $cpf, $dataNascimento, $nacionalidade, $descricao);
            header('Location: ../View/login.php');
            exit();
        } catch (Exception $e) {
            header('Location: ../View/register.php?erro=erro');
            exit();
        }
    }

    // Verificar se é uma tentativa de login
    if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
        $email = $_POST['login_email'];
        $senha = $_POST['login_password'];
        
        if ($objController->login($email, $senha)) {
            // Armazenar o ID do usuário na sessão para mantê-lo logado
            session_start();
            $_SESSION['user_id'] = $id;
            header('Location: ../View/inicial.php');
            exit();
        } else {
            header('Location: ../View/login.php?erro=login');
            exit();
        }
    }
}
?>
