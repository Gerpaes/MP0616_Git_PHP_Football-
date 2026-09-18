<?php

namespace WorldCup;

class Coach extends Person {
    private $style;

    public function __construct(int $age, string $style)
    {
        parent::__construct($age);
        $this->style = $style;
        
    }
    public function train() {
        echo "train\n";
    }

    /**
     * Get the style
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Set the style
     */
    public function setStyle($style) {
        $this->style = $style;
    }
}
