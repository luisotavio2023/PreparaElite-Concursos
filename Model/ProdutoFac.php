<?php

class ProdutoFactory {
    public static function create($tipo, $nome, $descricao, $valor, $quantidadeprod) {
        switch ($tipo) {
            case 'Camisas':
                return new Camisas($nome, $tipo, $descricao, $valor, $quantidadeprod);
            case 'Cadernos':
                return new Cadernos($nome, $tipo, $descricao, $valor, $quantidadeprod);
            case 'Apostilas':
                return new Apostilas($nome, $tipo, $descricao, $valor, $quantidadeprod);
            case 'Acessorios':
                return new Acessorios($nome, $tipo, $descricao, $valor, $quantidadeprod);
                case 'Cursos':
                    return new Cursos($nome, $tipo, $descricao, $valor, $disponibilidade);
            default:
                throw new Exception("Tipo de produto desconhecido: $tipo");
        }
    }
}


?>