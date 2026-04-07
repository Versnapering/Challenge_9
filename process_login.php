<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "challenge_9";
$port = 8889;

$conn = new mysqli($host, $username, $password, $database, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Check database
$sql = "SELECT * FROM inlogGegevens WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    header("Location: admin.php");
    exit();
} else {
    // Login failed
    header("Location: login.php?error=1");
}

$conn->close();
?>