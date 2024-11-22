<?php

require_once "../Model/BancodeDados.php";
require_once "../Model/Usuarios.php";
require_once "../Model/Professores.php";


class TeacherController{
    private $conn;

    public function __construct() {
        $this->conn = ConexaoBancoDados::getInstance()->conectar();
    }

    public function registrarProfessor($nome, $email, $senha, $cpf, $dataNascimento, $nacionalidade, $descricao) {
        // Criar uma instância do modelo de usuário
        $professor = new Professores(0, $email, password_hash($senha, PASSWORD_BCRYPT), $nome, $cpf, 'Aluno', $nacionalidade, $dataNascimento);
        $professor->setDescricao($descricao);
        // Tentar registrar o usuário
        try {
            $professor->registrar();
            return true;
        } catch (Exception $e) {
           return false;
        }
    }
}




?>