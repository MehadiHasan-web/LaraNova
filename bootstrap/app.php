<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

require_once __DIR__ . '/../vendor/autoload.php';
Ignition::make()->register();

// setup environment
$app = new App();
$app->run();



