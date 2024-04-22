<?php

  require "BancodeDados.php";

  class Usuarios{

    //Atributos
    private int $id;
    private string $email;
    private string $senha;
    private string $nome;
    private int $cpf;
    private string $tipous;
    private $dataNascimento;
    private string $descricao;
    private string $nacionalidade;
  

       // Construtor da classe
       public function __construct($Id, $Email, $Senha, $Nome, $CPF, $TipoUs, $Nacionalidade, $Formacao, $dataNascimento) {
        $this->id = $Id;
        $this->email = $Email;
        $this->senha = $Senha;
        $this->nome = $Nome;
        $this->cpf = $CPF;
        $this->tipous = $TipoUs;
        $this->nacionalidade = $Nacionalidade;
        $this->dataNascimento = $dataNascimento;
    }

    public function getId(){
      return $this->id;
    }

    public function setId($id){

    }

    public function getEmail(){
      return $this->email;
    }

    public function setEmail($email){
      $this->email = $email;
    }
    public function getSenha(){
      return $this->senha;
    }
    public function setSenha($senha){
      $this->senha = $senha;
    }

    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function getCPF(){
      return $this->cpf;
    }
    public function setCPF($cpf){
      $this->cpf = $cpf;
    }

    public function getTipoUs(){
      return $this->tipous;
    }
    public function setTipoUs($tipous){
      $this->tipous = $tipous;
    }
    public function getNacionalidade(){
      return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
      $this->nacionalidade = $nacionalidade;
    }
    public function getDataNascimento(){
      return $this->dataNascimento;
    }
}
?>