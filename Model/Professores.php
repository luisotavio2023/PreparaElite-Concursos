<?php

require "BancodeDados.php";
require_once('Usuarios.php');

 class Professores extends Usuários{

    //Atributos
    private string $formacao;
    private float $salario;
    

     // Construtor da classe
     public function __construct( $Formacao, $Salario) {
        parent::__construct($id, $nome, $email, $nacionalidade, $cpf);
        $this->formacao = $Formacao;
        $this->salario = $Salario;
    }

 }









?>