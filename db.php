<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilal";

// Create connection without db first
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // Database created or already exists
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
roll_no VARCHAR(50) NOT NULL,
department VARCHAR(100) NOT NULL,
section VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // Table created or already exists
} else {
    echo "Error creating table: " . $conn->error;
}
?>