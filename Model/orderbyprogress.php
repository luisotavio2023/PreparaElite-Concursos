<?php

class OrderByProgressoMedio implements Strategy {
    public function execute(array $cursos): array {
        usort($cursos, fn($a, $b) => $b['progresso_medio'] <=> $a['progresso_medio']);
        return $cursos;
    }
}

?>