<?php
$db_host = 'sql202.infinityfree.com';
$db_user = 'if0_35029802';
$db_pass = 'DgVdABzbMgk';
$db_name = 'DgVdABzbMgk';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM submissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Process the data, e.g., display it in an HTML table
    }
} else {
    echo "No data found.";
}

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead><tr><th>ID</th><th>Title</th><th>URL</th></tr></thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td><a href='" . $row["url"] . "'>" . $row["url"] . "</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No data found.";
}
?>
