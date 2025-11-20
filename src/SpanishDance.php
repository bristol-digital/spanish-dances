<?php

namespace HelloWorld\SpanishDance;

/**
 * A simple "Hello World" class that displays random Spanish dance styles
 */
class SpanishDance
{
    /**
     * Array of Spanish dance styles
     */
    private array $dances = [
        'Flamenco',
        'Paso Doble',
        'Sevillanas',
        'Jota',
        'Bolero',
        'Fandango',
        'Sardana',
        'Muñeira',
        'Zambra',
        'Seguidilla'
    ];

    /**
     * Get a random Spanish dance style
     *
     * @return string
     */
    public function getRandomDance(): string
    {
        return $this->dances[array_rand($this->dances)];
    }

    /**
     * Display a hello world message with a random Spanish dance
     *
     * @return string
     */
    public function sayHello(): string
    {
        $dance = $this->getRandomDance();
        return "¡Hola Mundo! Let's dance the {$dance}! 💃";
    }

    /**
     * Get all available Spanish dance styles
     *
     * @return array
     */
    public function getAllDances(): array
    {
        return $this->dances;
    }
}
