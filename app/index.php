<?php
phpinfo();


try {
    $pdo = new PDO(
        'pgsql:host=postgres;dbname=app_db',
        'app_user',
        'secret'
    );
    echo "PostgreSQL connection successful!";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}