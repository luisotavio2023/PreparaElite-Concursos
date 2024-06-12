<?php
class Produto {
    public $nome;
    public $preco;
    public $tipo;

    public function __construct($nome, $preco, $tipo) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->tipo = $tipo;
    }

    public function descricao() {
        return "$this->nome - R$".number_format($this->preco, 2);
    }

    public static function factory($tipo, $nome, $preco) {
        switch($tipo) {
            case "Camisas":
                return new Camisas($nome, $preco);
            case "Cadernos":
                return new Cadernos($nome, $preco);
            case "Apostilas":
                return new Apostilas($nome, $preco);
            case "Acessórios":
                return new Acessorios($nome, $preco);
            default:
                throw new Exception("Tipo de produto desconhecido: $tipo");
        }
    }
}

?>