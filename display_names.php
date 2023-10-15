<?php
// Database connection settings
$hostname = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SELECT query to fetch names
$sql = "SELECT first_name, last_name FROM members";

$result = mysqli_query($conn, $sql);

// Display the results in an HTML table
echo "<html><body>";
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Last Name</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td></tr>";
}

echo "</table>";
echo "</body></html>";

// Close the database connection
mysqli_close($conn);
?>
