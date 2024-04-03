<?php

require "BancodeDados.php";

 Class Produto{

    private string $nome; 
    private string $tipo;
    private string $descricao;
    private string $valor;
    private int $quantidadeprod;

    
    // Construtor da classe
    public function __construct($Nome, $Tipo, $Descricao, $Valor, $Quantidadeprod) {
        $this->nome = $Nome;
        $this->tipo = $Tipo;
        $this->descricao = $Descricao;
        $this->valor = $Valor;
        $this->quantidadeprod = $Quantidadeprod;
    }
 }


?>