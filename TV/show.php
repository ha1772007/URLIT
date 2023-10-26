<!DOCTYPE html>
<html>
<head>
    <title>Database Content Table</title>
    <style>
        .styled-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 20px 0;
            cursor: pointer;
        }
        
        /* Position the button at the bottom of the page */
        .styled-button-container {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

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
    if($_POST['l'] == '17'){
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
    if($_POST['a'] == "clear"){
        $sql = "DELETE FROM submissions";

        if ($conn->query($sql) === true) {
            echo "All records from the table have been deleted.";
        } else {
            echo "Error: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }

    // SQL query to retrieve data from a table (replace 'your_table' with your table name)
    $sql = "SELECT * FROM submissions";
    $result = $conn->query($sql);

    // Display data in an HTML table
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Title</th><th>URL</th><th>URL</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td><a href='https://urlit.000.pe/TV/play.php?url=" . urlencode($row["url"]) . "'>Play</a></td>";
            echo "<td><a href='" . $row["url"] . "'>Open</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo " <div class='styled-button-container'>
        <form method='POST' action='show.php'>
            <button type='submit' class='a' value='clear' name='a'>Submit</button>
            <input type='hidden' name='l' value='" . $_POST['l'] . "'>
        </form>
    </div>";
    } else {
        echo "No data found in the table.";
    }

    // Close the database connection
    $conn->close();
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="show.php" method="post">
        <label for="password">Enter Password</label>
        <input type="l" name="l" id="l" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

    <?php
}
    ?>
</body>
</html>
