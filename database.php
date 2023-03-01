<?php
    $dsn = 'mysql:host=localhost;dbname=fashion';
    $username = 'D00249620';
    $password = 'hannah123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
    
?>