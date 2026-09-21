<?php

namespace WorldCup;

class Ball {
    private string $material;

    public function __construct(string $material) {
        $this->material = "leather";
    }

    public function move(): void {
        echo "The " . $this->material . " ball is moving.\n";
    }

    public function getMaterial(): string {
        return $this->material;
    }

    public function setMaterial(string $material): void {
        $this->material = $material;
    }
}