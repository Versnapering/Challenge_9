<?php
$host = "127.0.0.1";
$username = "root";
$password = "root";
$database = "challenge_9";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";

// Example query (optional)
$sql = "SELECT * FROM inlogGegevens";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row); // display each row
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();
?>