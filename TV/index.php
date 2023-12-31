<?php
if($_POST['l'] == '17'){
if ($_SERVER["REQUEST_METHOD"] == "POST" & isset($_POST['title'])) {
    // Get form data
    $title = $_POST["title"];
    $url = $_POST["url"];
    
    // Connect to the database (modify these settings)
    $db_host = 'sql202.infinityfree.com';
    $db_user = 'if0_35029802';
    $db_pass = 'DgVdABzbMgk';
    $db_name = 'if0_35029802_tvshare';
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO submissions (title, url) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $url);

    if ($stmt->execute()) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Submit Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('background.jpg') center/cover no-repeat; /* Replace 'background.jpg' with your image */
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
        }

        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submit Details</h2>
        <form action="index.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <input type="hidden" name="l" id="l" value="<?php echo $_POST['l']; ?>">

            <label for="url">URL:</label>
            <input type="text" id="url" name="url" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
<?php }else{
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
    <form action="index.php" method="post">
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
