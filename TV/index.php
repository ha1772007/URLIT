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
        <form action="process_form.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="url">URL:</label>
            <input type="text" id="url" name="url" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
