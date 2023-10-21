<?php
// Database connection parameters
$db_host = 'sql202.infinityfree.com';
$db_user = 'if0_35029802';
$db_pass = 'DgVdABzbMgk';
$db_name = 'if0_35029802_tvshare';

// Create a connection to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to delete all records from a table (replace 'your_table' with your table name)
$sql = "DELETE FROM submissions";

if ($conn->query($sql) === true) {
    echo "All records from the table have been deleted.";
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
