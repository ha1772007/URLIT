<?php 
$path = 'https://d26g5bnklkwsh4.cloudfront.net/254c513c-8e1d-4043-9aae-7f35fa7a4ccc/hls/720/main.m3u8';
$mine_type = mine_content_type($path);

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: mist-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: " . $mine_type);
header("Content-Length: " . (string)(filesize($path)) );
header('Content-Disposition: attached; filename="' .basename($path).'"');
header("Content-Transfer-Encoding: binary\n");

readfile($path);

exit();
?>