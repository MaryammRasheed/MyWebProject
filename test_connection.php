<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=mywebproject', 'root', '');
    echo "Connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
