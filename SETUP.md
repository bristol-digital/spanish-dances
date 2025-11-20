# Setup and Publishing Guide

## Quick Start (Without Composer)

If you want to test the package immediately without Composer:

```bash
php test.php
```

This uses the included `autoload.php` for manual class loading.

## Composer Setup

### Installing Composer

If you don't have Composer installed:

```bash
# Download and install Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

### Installing Dependencies

```bash
composer install
```

After running `composer install`, use the example.php file:

```bash
php example.php
```

## Publishing to Packagist

Follow these steps to publish your package to Packagist:

### 1. Create a GitHub Repository

```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/yourusername/spanish-dance-hello.git
git push -u origin main
```

### 2. Register on Packagist

1. Go to https://packagist.org
2. Sign in with your GitHub account
3. Click "Submit"
4. Enter your GitHub repository URL: `https://github.com/yourusername/spanish-dance-hello`
5. Click "Check"

### 3. Set Up GitHub Webhook (Optional but Recommended)

1. Go to your GitHub repository settings
2. Click on "Webhooks"
3. Add webhook from Packagist
4. This will automatically update Packagist when you push changes

### 4. Tag a Release

```bash
git tag -a v1.0.0 -m "First release"
git push origin v1.0.0
```

## Using the Package

Once published, others can install it with:

```bash
composer require helloworld/spanish-dance
```

## Package Structure

```
spanish-dance-hello/
├── src/
│   └── SpanishDance.php     # Main class
├── composer.json             # Package definition
├── autoload.php             # Manual autoloader (for testing without Composer)
├── example.php              # Example usage with Composer autoloader
├── test.php                 # Test script with manual autoloader
├── README.md                # Documentation
├── LICENSE                  # MIT License
└── .gitignore              # Git ignore file
```

## Customization

Before publishing, update these files:

1. **composer.json**: Change the package name and author information
2. **LICENSE**: Update copyright holder name
3. **README.md**: Update installation instructions with your actual package name

## Requirements

- PHP 8.0 or higher
- Composer (for dependency management)

## Testing

Run the test script to verify everything works:

```bash
php test.php
```

Expected output:
```
=== Spanish Dance Hello World Package ===

¡Hola Mundo! Let's dance the Flamenco! 💃

Random dance: Sevillanas

All Spanish dances:
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

=== Test Complete ===
```

## Troubleshooting

### Composer not found
Install Composer following the instructions in the "Installing Composer" section above.

### Class not found
Make sure you've run `composer install` to generate the autoloader, or use `test.php` which includes a manual autoloader.

### Permission denied
You may need to use `sudo` when moving composer.phar to /usr/local/bin/

## Next Steps

- Add unit tests using PHPUnit
- Add more Spanish dance styles
- Extend functionality (e.g., add dance descriptions, origins, etc.)
- Add CI/CD pipeline
- Create better documentation
