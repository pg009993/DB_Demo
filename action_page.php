<?php

// lines below create variables for server name, db, username, password
$servername = 'localhost:3306';
$dbname = 'customers';
$username = 'root';
$password = 'root';
try {
    $conn = new PDO("mysql:host=" . $GLOBALS['servername'] . ";dbname=" . $GLOBALS['dbname'], $GLOBALS['username'], $GLOBALS['password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

//testing 
//echo $_GET["firstname"];
//echo $_GET["lastname"];

$conn = null;
?>