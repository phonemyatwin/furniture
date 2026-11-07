<?php
$host = 'localhost';
$dbname = 'furnish_me';
$charset = 'utf8mb4';
$username = 'nexus';
$password = 'thuyumyat';

// Data Source Name
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

// PDO Configuration Options
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

// Database Connection
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    error_log($e->getMessage());
    exit("Database connection failed.");
}
