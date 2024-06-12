<?php

class Acessorios extends Produto {
    public static function getAll() {
        $conn = Conexao::getInstance();
        $stmt = $conn->query("SELECT * FROM produtos WHERE tipo = 'Acessórios'");
        $acessorios = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $acessorios[] = new Acessorios($row['nome'], $row['preco']);
        }
        return $acessorios;
    }

    public function descricao() {
        return "Acessórios: " . parent::descricao();
    }
}


?>