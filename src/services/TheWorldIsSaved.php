<?php

class TheWorldIsSaved extends \Tina4\Process implements \Tina4\ProcessInterface
{
    public $name = "superhero";

    public function canRun(): bool
    {
        return true;
    }

    public function run()
    {
        echo "Superheroes save the world" . PHP_EOL;
        $service = new \Tina4\Service();
        $service->addProcess(new TheWorldEnds("villain"));
        $service->removeProcess("superhero");
    }
}