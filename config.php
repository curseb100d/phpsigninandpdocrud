<?php

// Setting up
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phppdocrud';

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$HOSTNAME;dbname=$DATABASE", $USERNAME, $PASSWORD);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully"; // Optional: Can be removed in production
} catch (PDOException $e) {
    // If connection fails, an exception will be thrown and caught here
    die("Connection failed: " . $e->getMessage());
}
