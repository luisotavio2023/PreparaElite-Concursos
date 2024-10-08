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
        $sql = "INSERT INTO usuarios (email, senha, nome, cpf, tipous, datanasc, descricao, nacionalidade) VALUES ('$email', '$senha', '$nome', '$cpf', '$dataNascimento', '$descricao', '$nacionalidade')";
    
        $stmt = $this->conn->prepare($sql); // Prepara a declaração
    
        if ($stmt) {
            // Definindo os parâmetros e executando
            $stmt->bind_param(
                "ssssssss", // 's' para string - um para cada parâmetro
                $email,
                $senha,
                $nome,
                $cpf,
                $tipous,
                $dataNascimento,
                $descricao,
                $nacionalidade
            );
    
            // Execução do statement
            if ($stmt->execute()) {
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar usuário: " . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo "Erro na preparação do SQL: " . $this->conn->error;
        }
    }
}


?>
