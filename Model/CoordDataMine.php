<?php

class MineracaoCoordenadores extends MineracaoCurriculosTemplate {
    protected function filtrarCurriculos(array $curriculos): array {
        // Filtra apenas os currículos de coordenadores
        return array_filter($curriculos, fn($curriculo) => $curriculo['cargo'] === 'Coordenador');
    }

    protected function analisarDados(array $dados): array {
        $formacoes = array_column($dados, 'formacao');
        $frequenciaFormacao = array_count_values($formacoes);

        return [
            'total' => count($dados),
            'formacoes' => $frequenciaFormacao,
        ];
    }
}
?>
