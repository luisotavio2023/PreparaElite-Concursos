<?php

class ConexaoBancoDados {
    private $servername = "";
    private $username = "";
    private $password = "";
    private $dbname = "";
    private $conn = "";

    // Construtor da classe
    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    // Método para estabelecer a conexão
    public function conectar() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificando a conexão
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }

        echo "Conexão bem-sucedida";
    }

    // Método para fechar a conexão
    public function fecharConexao() {
        $this->conn->close();
    }
}




?>