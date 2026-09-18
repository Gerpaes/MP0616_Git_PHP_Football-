<?php

namespace WorldCup;

/**
 * Class to define the goalkeeper
 */
class Person  {

    private $age; 

    public function __construct($age) {
        $this->age = $age;
    }

    /**
     * Get the age
     */
    public function isage() {
        return $this->age;
    }

    /**
     * Set the age
     */
    public function setage($age) {
        $this->age = $age;
    }

    public function run() {

        echo "running";
    }
}