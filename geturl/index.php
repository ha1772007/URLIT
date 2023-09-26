<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETURL</title>
</head>
<body>
    
</body>
</html>
<?php
  $id = $_GET['id'];
  $q = $_GET['q'];
  header("Location: https://d26g5bnklkwsh4.cloudfront.net/" . $id ."/hls/" . $q . "/main.m3u8");
?>