<?php

require_once __DIR__ . '/autoload.php';

use BristolDigital\SpanishDance\SpanishDance;

echo "=== Spanish Dance Hello World Package ===\n\n";

// Create a new instance
$spanishDance = new SpanishDance();

// Display hello world with random dance
echo $spanishDance->sayHello() . "\n\n";

// Get and display a random dance
echo "Random dance: " . $spanishDance->getRandomDance() . "\n\n";

// Display all available dances
echo "All Spanish dances:\n";
foreach ($spanishDance->getAllDances() as $dance) {
    echo "  - {$dance}\n";
}

echo "\n=== Test Complete ===\n";
