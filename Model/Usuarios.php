<?php

require_once "BancodeDados.php"; 

class Usuarios {
    // Atributos
    private int $id;
    private string $email;
    private string $senha;
    private string $nome;
    private string $cpf;
    private string $tipous;
    private $dataNascimento;
    private string $descricao;
    private string $nacionalidade;
    private $conn;

    public function __construct($Id = null, $Email = '', $Senha = '', $Nome = '', $CPF = 0, $TipoUs = '', $Nacionalidade = '', $dataNascimento = '') {
        $this->conn = ConexaoBancoDados::getInstance()->conectar();
        $this->id = $Id;
        $this->email = $Email;
        $this->senha = $Senha;
        $this->nome = $Nome;
        $this->cpf = $CPF;
        $this->tipous = $TipoUs;
        $this->nacionalidade = $Nacionalidade;
        $this->dataNascimento = $dataNascimento;
    }

    // Métodos Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function getTipoUs() {
        return $this->tipous;
    }

    public function setTipoUs($tipous) {
        $this->tipous = $tipous;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Método para registrar o usuário no banco de dados
    public function registrar() {
        $conexao = ConexaoBancoDados::getInstance();

        // Verificar sucesso ou falha da inserção
        if ($conexao->inserirUsuario(
            $this->email, 
            $this->senha, 
            $this->nome, 
            $this->cpf, 
            $this->nacionalidade, 
            $this->dataNascimento, 
            $this->descricao
        )) {
            return true;
        } else {
            return false;
        }
    }

    // Método para registrar o usuário no banco de dados
    public function acessar() {
        $conexao = ConexaoBancoDados::getInstance();

        // Verificar sucesso ou falha da inserção
        if ($conexao->acessar(
            $this->email, 
            $this->senha
        )) {
            return true;
        } else {
            return false;
        }
    }
}
?>
