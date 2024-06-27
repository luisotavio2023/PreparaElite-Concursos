<?php

class Cursos extends Produto {
    public static function getAll() {
        $conn = Conexao::getInstance();
        $stmt = $conn->query("SELECT * FROM produtos WHERE tipo = 'cursos'");
        $apostilas = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $apostilas[] = new Apostilas($row['nome'], $row['preco']);
        }
        return $apostilas;
    }

    public function descricao() {
        return "Cursos: " . parent::descricao();
    }
}



?>