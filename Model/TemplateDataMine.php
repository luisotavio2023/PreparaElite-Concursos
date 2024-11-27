<?php

abstract class MineracaoCurriculosTemplate {
    // Método principal que organiza o processo
    public function processarCurriculos(array $curriculos): array {
        // Etapa 1: Filtrar currículos
        $dadosFiltrados = $this->filtrarCurriculos($curriculos);

        // Etapa 2: Analisar currículos
        $analiseDados = $this->analisarDados($dadosFiltrados);

        // Etapa 3: Exibir resultados
        $resultados = $this->exibirResultados($analiseDados);

        return $resultados;
    }

    // Métodos que as subclasses podem sobrescrever
    protected function filtrarCurriculos(array $curriculos): array {
        return $curriculos; // Nenhum filtro por padrão
    }

    abstract protected function analisarDados(array $dados): array;

    protected function exibirResultados(array $analise): array {
        return $analise; // Apenas retorna os resultados como padrão
    }
}
?>
