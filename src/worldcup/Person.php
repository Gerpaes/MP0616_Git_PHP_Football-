<?php

namespace WorldCup;

/**
 * Class to define the person
 */
class Person  {

    private $age; 

    public function __construct($age) {
        $this->age = $age;
    }

    /**
     * Get the age
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set the age
     */
    public function setAge($age) {
        $this->age = $age;
    }

    public function run() {

        echo "running\n";
    }
}