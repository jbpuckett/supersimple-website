<?php
// Database connection settings
$hostname = "sql9.freesqldatabase.com"; // Hostname
$port = 3306; // Port number
$database = "sql9653805"; // Database name
$username = "sql9653805"; // Database username
$password = "XGuCcb71eJ"; // Database password

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database, $port);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SELECT query to fetch the results
$query = "SELECT ID, `First Name`, `Last Name` FROM members";

$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Display the results in an HTML table
    echo "<html><body>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td></tr>";
    }

    echo "</table>";
    echo "</body></html>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
