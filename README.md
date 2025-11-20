# Spanish Dance Hello World

A simple "Hello World" PHP package that displays random Spanish dance styles. This package demonstrates basic Composer package structure and can be published to Packagist.

## Features

- Display a hello world message with a random Spanish dance style
- Get a random Spanish dance
- List all available Spanish dances
- PSR-4 autoloading
- PHP 8.0+ compatible

## Installation

### Via Composer

```bash
composer require helloworld/spanish-dance
```

### Manual Installation

1. Clone this repository
2. Run `composer install`

## Usage

### Basic Usage

```php
<?php

require_once 'vendor/autoload.php';

use HelloWorld\SpanishDance\SpanishDance;

$spanishDance = new SpanishDance();

// Display hello world with a random Spanish dance
echo $spanishDance->sayHello();
// Output: ¡Hola Mundo! Let's dance the Flamenco! 💃
```

### Get Random Dance

```php
$dance = $spanishDance->getRandomDance();
echo "Let's dance the {$dance}!";
```

### Get All Dances

```php
$allDances = $spanishDance->getAllDances();
print_r($allDances);
```

## Running the Example

```bash
php example.php
```

## Available Spanish Dances

- Flamenco
- Paso Doble
- Sevillanas
- Jota
- Bolero
- Fandango
- Sardana
- Muñeira
- Zambra
- Seguidilla

## Publishing to Packagist

1. Create a GitHub repository for this package
2. Push your code to GitHub
3. Go to [Packagist.org](https://packagist.org)
4. Submit your GitHub repository URL
5. Set up the GitHub service hook for auto-updates

## Requirements

- PHP 8.0 or higher

## License

MIT License

## Author

Your Name (your.email@example.com)
