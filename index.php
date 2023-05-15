<?php
require_once "./vendor/autoload.php";
$config = new \Tina4\Config();

$service = new \Tina4\Service();
$service->addProcess(new TestProcess("My Process"));
$service->addProcess(new TheWorldEnds("villain"));
//$service->removeProcess("My Process");
//$service->removeProcess("villain");
//$service->removeProcess("superhero");


\Tina4\Initialize();
echo new \Tina4\Tina4Php($config);