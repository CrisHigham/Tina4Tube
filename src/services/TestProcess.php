<?php

class TestProcess extends \Tina4\Process implements \Tina4\ProcessInterface
{
    public $name = "My Service";

    public function canRun(): bool
    {
        return true;
    }

    public function run()
    {
        global $session;
        $session[0] = $session[0] + 1;
        echo "No of runs: " . $session[0] . PHP_EOL;
    }
}