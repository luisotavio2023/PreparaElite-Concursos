<?php

class OrderByQuantidadeAulas implements Strategy {
    public function execute(array $cursos): array {
        usort($cursos, fn($a, $b) => $b['quantidade_aulas'] - $a['quantidade_aulas']);
        return $cursos;
    }
}

?>