<?php

class ConexaoBancoDados {
    private static $instance = null;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "preparaelite";
    private $conn;

    // Método construtor privado para evitar instâncias fora da classe
    private function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificando a conexão
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }

        echo "Conexão bem-sucedida";
    }

    // Método para obter a instância única da conexão
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new ConexaoBancoDados();
        }
        return self::$instance;
    }

    // Método para estabelecer a conexão
    public function conectar() {
        return $this->conn;
    }

    // Método para fechar a conexão
    public function fecharConexao() {
        $this->conn->close();
    }

    // Evita a clonagem da instância
    private function __clone() {}

    // Método para inserir um usuário no banco de dados
    public function inserirUsuario($email, $senha, $nome, $cpf, $dataNascimento, $descricao, $nacionalidade) {
        $tipous = "Aluno"; // Define o tipo de usuário como "Aluno" por padrão
    
        // Prepara o SQL para inserção com marcadores de posição
        $sql = "INSERT INTO usuarios (email, senha, nome, cpf, tipous, datanasc, descricao, nacionalidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = $this->conn->prepare($sql); // Prepara a declaração
    
        if ($stmt) {
            // Definindo os parâmetros e executando
            if ($stmt->execute([$email, $senha, $nome, $cpf, 'aluno', $dataNascimento, $descricao, $nacionalidade])) {
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar usuário: " . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo "Erro na preparação do SQL: " . $this->conn->error;
        }
    }

    public function acessar($email, $senha){
        $stmt = $this->conn->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $stmt->bind_result($id, $senhaHash);

        // Verificar se o usuário foi encontrado e a senha está correta
        if ($stmt->fetch() && password_verify($senha, $senhaHash)) {
            return true;
        } else {
            return false;
        }
    }
}


?>
