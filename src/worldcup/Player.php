<?php

namespace WorldCup;

    class Player extends Person {

        private string $position;

        public function __construct(int $age, string $position){
            parent::__construct($age);
            $this->position = $position;
        }

        public function passBall() {
            echo "passing the ball\n";

        }
        

    }