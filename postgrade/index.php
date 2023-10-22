<!DOCTYPE html>
<html>
<head>
    <title>Submit Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $host = "db.hwczsiakeyczxdbdklww.supabase.co";
        $port = "5432";
        $dbname = "postgres";
        $user = "postgres";
        $password = "0jvnw4qJZKKFwkWa";

        try {
            $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $name = $_POST["name"];
            $email = $_POST["email"];

            $query = "INSERT INTO testtable (name, email) VALUES (:name, :email)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "Data submitted successfully.";
            } else {
                echo "Error submitting data.";
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
    ?>
</body>
</html>
