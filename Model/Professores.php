<?php

 class Professores{

    //Atributos
    private string $nome;
    private string $nacionalidade;
    private string $formacao;
    private float $salario;
    

     // Construtor da classe
     public function __construct($Nome, $Nacionalidade, $Formacao, $Salario) {
        $this->nome = $Nome;
        $this->nacionalidade = $Nacionalidade;
        $this->formacao = $Formacao;
        $this->salario = $Salario;
    }

 }









?>