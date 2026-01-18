<?php
    $host = '127.0.0.1';
    $db = 'my_library';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=127.0.0.1;port=8889;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    
    try {
    $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }