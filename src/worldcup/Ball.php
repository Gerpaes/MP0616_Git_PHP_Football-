<?php

class Ball {
    private string $material;

    public function __construct(string $material) {
        $this->material = $material;
    }

    public function move(): void {
        echo "El balón de " . $this->material . " se está moviendo.\n";
    }

    public function getMaterial(): string {
        return $this->material;
    }

    public function setMaterial(string $material): void {
        $this->material = $material;
    }
}