<?php

namespace WorldCup;

    class Player extends Person {

        protected string $position;

        public function __construct(int $age, string $position){
            parent::__construct($age);
            $this->position = $position;
        }

        public function getPosition(): string{
            return $this->position;
        }

        public function setPosition (string $position): void{
            $this->position = $position;
        }

        public function passBall() {
            echo "passing the ball\n";

        }
        
    }