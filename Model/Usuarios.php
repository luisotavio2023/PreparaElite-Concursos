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
        $this->formacao = $Formacao;
        $this->dataNascimento = $dataNascimento;
    }
}
?>