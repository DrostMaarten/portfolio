<?php
/**
 * Eenvoudige .env-loader.
 * Leest sleutel=waarde-paren uit het .env-bestand in de projectroot
 * en maakt ze beschikbaar via env('SLEUTEL').
 *
 * Het .env-bestand hoort NOOIT in versiebeheer of in een zip te zitten.
 * Gebruik .env.example als sjabloon.
 */

function loadEnv(string $path): void
{
    static $loaded = false;
    if ($loaded) {
        return;
    }
    if (!is_readable($path)) {
        return;
    }
    $values = parse_ini_file($path);
    if ($values === false) {
        return;
    }
    foreach ($values as $key => $value) {
        if (getenv($key) === false) {
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
    $loaded = true;
}

function env(string $key, ?string $default = null): ?string
{
    $value = getenv($key);
    return $value === false ? $default : $value;
}

// Laad automatisch het .env-bestand uit de projectroot (één map boven /includes).
loadEnv(dirname(__DIR__) . '/.env');
