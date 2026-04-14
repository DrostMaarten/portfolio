<?php

namespace app\core;

use PDO;
use PDOException;

class database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        $env = parse_ini_file(__DIR__ . '/../../.env');
        $host = $env['DB_HOST'];
        $db   = $env['DB_NAME'];
        $user = $env['DB_USER'];
        $pass = $env['DB_PASS'];
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8mb4",
                    "$user",
                    "$pass",
                    [
                        pdo::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        pdo::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}