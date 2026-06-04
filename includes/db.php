<?php

namespace app\core;

use PDO;
use PDOException;

require_once __DIR__ . '/env.php';

class database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            $host = env('DB_HOST', 'localhost');
            $db   = env('DB_NAME', '');
            $user = env('DB_USER', '');
            $pass = env('DB_PASS', '');

            try {
                self::$connection = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8mb4",
                    $user,
                    $pass,
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                // Geen technische details naar de bezoeker lekken.
                error_log('Database connection failed: ' . $e->getMessage());
                http_response_code(500);
                exit('Er ging iets mis bij het verbinden met de database.');
            }
        }
        return self::$connection;
    }
}
