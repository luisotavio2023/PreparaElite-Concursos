<?php

  class Usuarios{

    //Atributos
    private string $nome;
    private $dataNascimento;
    private string $descricao;
    private string $nacionalidade;
  

       // Construtor da classe
       public function __construct($Nome, $Nacionalidade, $Formacao, $dataNascimento) {
        $this->nome = $Nome;
        $this->nacionalidade = $Nacionalidade;
        $this->formacao = $Formacao;
        $this->dataNascimento = $dataNascimento;
    }
}
?>