<?php

class Context {
    private Strategy $strategy;

    public function setStrategy(Strategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function executeStrategy(array $cursos): array {
        return $this->strategy->execute($cursos);
    }
}

?>
