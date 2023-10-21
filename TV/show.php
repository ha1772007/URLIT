<!DOCTYPE html>
<html>
<head>
    <title>Database Content Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

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

    // SQL query to retrieve data from a table (replace 'your_table' with your table name)
    $sql = "SELECT * FROM submissions";
    $result = $conn->query($sql);

    // Display data in an HTML table
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Title</th><th>URL</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td><a href='" . $row["url"] . "'>Open</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found in the table.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
