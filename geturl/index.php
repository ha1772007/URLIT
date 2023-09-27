<?php
  sleep(3);
  $id = $_GET['id'];
  $q = $_GET['q'];
  header("Location: https://d26g5bnklkwsh4.cloudfront.net/" . $id ."/hls/" . $q . "/main.m3u8");
?>
