

<?php
    $dsn = 'mysql:host=localhost;dbname=D00249620';
    $username = 'D00249620';
    $password = 'dyPSnVPj';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>