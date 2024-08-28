<?php

 require_once "../Model/BancodeDados.php";

 class UserController{
    private $usercontroller;
    private $conn;
    
        public function __construct($UserController) {
            require "../Model/BancodeDados.php";
            $this->conn = BancodeDados::conectar();
            $this->usercontroller = $UserController;
        }
    
        public function CadastroCurriculo() {
            // Verificar se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Armazenar os dados do formulário em variáveis
                $name = $_POST["name"];
                $email = $_POST["email"];
                $position = $_POST["position"];
    
                // Armazenar o arquivo enviado em uma variável
                $arquivo = $_FILES["resume"];
    
                // Verificar se o arquivo foi enviado
                if ($arquivo["error"] == UPLOAD_ERR_OK) {
                    // Obter a extensão do arquivo
                    $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));
    
                    // Verificar se a extensão do arquivo é válida
                    if ($extensao == "docx" || $extensao == "doc" || $extensao == "pdf") {
                        // Gerar um nome único para o arquivo
                        $nomeUnico = uniqid() . "." . $extensao;
    
                        // Mover o arquivo para a pasta de destino
                        $destino = "uploads/" . $nomeUnico;
                        if (move_uploaded_file($arquivo["tmp_name"], $destino)) {
                            // Armazenar os dados do formulário no banco de dados
                            $stmt = $this->conn->prepare("INSERT INTO candidatos (nome, email, cargo, curriculum) VALUES (?, ?, ?, ?)");
                            $stmt->bind_param("ssss", $name, $email, $position, $destino);
                            $stmt->execute();
    
                            // Exibir mensagem de sucesso e limpar os campos do formulário
                            echo "<div class='alert alert-success' role='alert' style='position:fixed; bottom:0; right:0; z-index:1000;'>Currículo enviado com sucesso!</div>";
                            echo "<script>document.getElementById('name').value = ''; document.getElementById('email').value = ''; document.getElementById('position').value = 'Selecione';</script>";
                        } else {
                            echo "Erro ao enviar o arquivo.";
                        }
                    } else {
                        echo "Formato de arquivo inválido. Aceitamos apenas arquivos DOCX, DOC e PDF.";
                    }
                } else {
                    echo "Erro ao enviar o arquivo.";
                }
            }
        }
        public function CadastroUsuario() {
            // Verificar se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Armazenar os dados do formulário em variáveis
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $cpf = $_POST["cpf"];
                $tipous = $_POST["tipous"];
                $nacionalidade = $_POST["nacionalidade"];
                $dataNascimento = $_POST["dataNascimento"];
                
                // Criar uma instância da classe Usuarios
                $usuario = new Usuarios(null, $email, $senha, $nome, $cpf, $tipous, $nacionalidade, $dataNascimento);
                
                try {
                    // Inserir o usuário no banco de dados
                    if ($usuario->registrar()) {
                        // Redirecionar para login.php após o registro bem-sucedido
                        header("Location: login.php");
                        exit(); // Certifica que o script para aqui
                    } else {
                        // Exibir mensagem de erro se o registro falhar
                        echo "<div class='alert alert-danger' role='alert' style='position:fixed; bottom:0; right:0; z-index:1000;'>Erro ao cadastrar usuário.</div>";
                    }
                } catch (Exception $e) {
                    // Captura e exibe qualquer exceção que possa ocorrer
                    echo "<div class='alert alert-danger' role='alert' style='position:fixed; bottom:0; right:0; z-index:1000;'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
                }
            }
        }
        

    
    }


?>