<?php

require "BancodeDados.php";

 Class Produto{

    private $imagem;
    private string $tipo;
    private string $nome;
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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    

    public static function getAll() {
        $conn = require('../config/database.php');
        $sql = "SELECT nome, descricao, quantidade_disponivel, valor, imagem FROM produtos";
        $resultado = $conexao->query($sql);
        $produtos = [];
        if ($resultado->num_rows > 0) {
            while ($produto = $resultado->fetch_assoc()) {
                $produtos[] = $produto;
            }
        }
        $conexao->close();
        return $produtos;
    }
 }


?>