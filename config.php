<?php
// config.php
$DB_HOST = '127.0.0.1';
$DB_NAME = 'libraryhub';
$DB_USER = 'your_db_user';
$DB_PASS = 'your_db_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo 'Database connection failed: ' . htmlspecialchars($e->getMessage());
    exit;
}
