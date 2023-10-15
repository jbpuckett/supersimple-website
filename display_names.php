<?php
// Database connection settings
$hostname = "sql9.freesqldatabase.com";
$username = "sql9653573";
$password = "7Zz9GmYtyX";
$database = "members";

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SELECT query to fetch names
$sql = "SELECT First_Name, Last_Name FROM members";

$result = mysqli_query($conn, $sql);

// Display the results in an HTML table
echo "<html><body>";
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Last Name</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['First_Name'] . "</td><td>" . $row['Last_Name'] . "</td></tr>";
}

echo "</table>";
echo "</body></html>";

// Close the database connection
mysqli_close($conn);
?>
