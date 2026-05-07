<?php
$host = "localhost";
$db_username = "root";
$db_password = "root";
$database = "challenge_9";

$conn = new mysqli($host, $db_username, $db_password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully!";

// Example query (optional)
/*$sql = "SELECT * FROM inlogGegevens";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row); // display each row
    }
} else {
    echo "No results found.";
}
*/

$qrstmt = $conn->query("SELECT id, username, email, leeftijd, groep, datum FROM ticket");

$tickets = $qrstmt->fetch_all(MYSQLI_ASSOC);

// Close connection
//$conn->close();
?>