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
}

?>
