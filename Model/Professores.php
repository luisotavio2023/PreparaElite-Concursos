<?php

require_once "BancodeDados.php";

class Professores {
    // Atributos
    private string $formacao;
    private float $salario;
    private string $email;
    private string $senha;
    private string $nome;
    private string $cpf;
    private string $foto;
    private string $dataNascimento;
    private $conn;
    private int $codigo;

    // Construtor
    public function __construct($codigo = null, $Email = '', $Senha = '', $Nome = '', $CPF = '', $foto = '', $formacao = '', $dataNascimento = '', $salario = 0) {
        $this->conn = ConexaoBancoDados::getInstance()->conectar();
        $this->codigo = $codigo;
        $this->email = $Email;
        $this->senha = $Senha;
        $this->nome = $Nome;
        $this->cpf = $CPF;
        $this->foto = $foto;
        $this->dataNascimento = $dataNascimento;
        $this->formacao = $formacao;
        $this->salario = $salario;
    }

    // Código
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    // Email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    // Senha
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    // Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    // CPF
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    // Foto
    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }

    // Data de Nascimento
    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }

    // Formação
    public function getFormacao() {
        return $this->formacao;
    }

    public function setFormacao($formacao): void {
        $this->formacao = $formacao;
    }

    // Salário
    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }

        // Método para registrar o professor no banco de dados
        public function registrar() {
            $conexao = ConexaoBancoDados::getInstance();
    
            // Verificar sucesso ou falha da inserção
            if ($conexao->inserirProfessor(
                $this->email, 
                $this->senha, 
                $this->nome, 
                $this->cpf, 
                $this->foto, 
                $this->formacao, 
                $this->dataNascimento,
                $this->salario
            )) {
                return true;
            } else {
                return false;
            }
        }

    public function acessar() {
      $stmt = $this->conn->prepare("SELECT codigo, senha FROM professores WHERE email = ?");
    // Executar a consulta, passando diretamente o parâmetro
    $stmt->execute([$this->email]);  // Passando o $email diretamente para o execute()

    // Armazenar os resultados da consulta
    $stmt->store_result();

    // Verificar se a consulta retornou resultados
    if ($stmt->num_rows > 0) {
        // Atribuir os valores diretamente
        $stmt->bind_result($id, $senhaHash);  // Vincula os resultados às variáveis

        // Recuperar a primeira linha de resultado
        $stmt->fetch();

        // Verificar se a senha fornecida corresponde ao hash da senha no banco de dados
        if (password_verify($this->senha, $senhaHash)) {
            return true;  // A senha é válida
        }
    }

    return false;
  }
}
?>
