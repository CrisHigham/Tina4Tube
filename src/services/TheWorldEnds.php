<?php

class TheWorldEnds extends \Tina4\Process implements \Tina4\ProcessInterface
{
    public $name = "villain";

    public function canRun(): bool
    {
        return true;
    }

    public function run()
    {
        echo "A new villain has arrived" . PHP_EOL;
        $service = new \Tina4\Service();
        $service->addProcess(new TheWorldIsSaved("superhero"));
        $service->removeProcess("villain");
    }
}