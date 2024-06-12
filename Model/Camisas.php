<?php

class Camisas extends Produto {
    public static function getAll() {
        $conn = Conexao::getInstance();
        $stmt = $conn->query("SELECT * FROM produtos WHERE tipo = 'Camisas'");
        $camisas = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $camisas[] = new Camisas($row['nome'], $row['preco']);
        }
        return $camisas;
    }

    public function descricao() {
        return "Camisas: " . parent::descricao();
    }
}




?>