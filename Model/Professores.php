<?php

require_once "BancodeDados.php";
require_once "Usuarios.php";

class Professores extends Usuarios {
    // Atributos
    private string $formacao;
    private float $salario;

    // Construtor da classe
    public function __construct($id, $nome, $email, $nacionalidade, $cpf, $formacao, $salario) {
        parent::__construct($id, $nome, $email, $nacionalidade, $cpf);
        $this->formacao = $formacao;
        $this->salario = $salario;
    }

   public function getFormacao() {
        return $this->formacao;
   }

   public function setFormacao($formacao){
      $this->formacao = $formacao;
   }

   public function getSalario() {
        return $this->salario;
   }

   public function setSalario($salario){
      $this->salario = $salario;
   }

   
}

?>
