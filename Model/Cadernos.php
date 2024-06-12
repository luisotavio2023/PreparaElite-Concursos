<?php

class Cadernos extends Produto {
    public static function getAll() {
        $conn = Conexao::getInstance();
        $stmt = $conn->query("SELECT * FROM produtos WHERE tipo = 'Cadernos'");
        $cadernos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cadernos[] = new Cadernos($row['nome'], $row['preco']);
        }
        return $cadernos;
    }

    public function descricao() {
        return "Cadernos: " . parent::descricao();
    }
}



?>