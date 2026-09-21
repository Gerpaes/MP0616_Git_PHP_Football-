<?php

namespace WorldCup;

/**
 * Class to define the GoalKeeper
 */
class GoalKeeper extends Player
{
    private $globes; // property declared without type, like in original

    public function __construct($globes)
    {
        $this->$globes = $globes;
    }

    /**
     * Get the globes
     */
    public function isGlobes()
    {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes($globes)
    {
        $this->globes = $globes;
    }

    public function block(Ball $ball)
    {
        $effects = ["with success", "without success"];

        $effect = $effects[array_rand($effects)];

        echo "catching $effect\n";
    }
}
