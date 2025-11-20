<?php

require_once __DIR__ . '/vendor/autoload.php';

use BristolDigital\SpanishDance\SpanishDance;

// Create a new instance
$spanishDance = new SpanishDance();

// Display hello world with random dance
echo $spanishDance->sayHello() . PHP_EOL;
echo PHP_EOL;

// Get and display a random dance
echo "Random dance: " . $spanishDance->getRandomDance() . PHP_EOL;
echo PHP_EOL;

// Display all available dances
echo "All Spanish dances:" . PHP_EOL;
foreach ($spanishDance->getAllDances() as $dance) {
    echo "  - {$dance}" . PHP_EOL;
}
