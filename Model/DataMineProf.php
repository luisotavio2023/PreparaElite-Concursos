<?php

class MineracaoProfessores extends MineracaoCurriculosTemplate {
    protected function filtrarCurriculos(array $curriculos): array {
        // Filtra apenas os currículos de professores
        return array_filter($curriculos, fn($curriculo) => $curriculo['cargo'] === 'Professor');
    }

    protected function analisarDados(array $dados): array {
        $totalExperiencia = array_sum(array_column($dados, 'anos_experiencia'));
        $mediaExperiencia = count($dados) > 0 ? $totalExperiencia / count($dados) : 0;

        $habilidades = [];
        foreach ($dados as $curriculo) {
            foreach ($curriculo['habilidades'] as $habilidade) {
                if (!isset($habilidades[$habilidade])) {
                    $habilidades[$habilidade] = 0;
                }
                $habilidades[$habilidade]++;
            }
        }

        return [
            'total' => count($dados),
            'media_experiencia' => round($mediaExperiencia, 2),
            'habilidades' => $habilidades,
        ];
    }
}
?>
