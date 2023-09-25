<?php
// Path to the file
$path = 'https://d26g5bnklkwsh4.cloudfront.net/254c513c-8e1d-4043-9aae-7f35fa7a4ccc/hls/720/main.m3u8';

// This is based on file type of $path, but not always needed    
$mm_type = "application/octet-stream";

//Set headers
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: " . $mm_type);
header("Content-Length: " .(string)(filesize($path)) );
header('Content-Disposition: attachment; filename="'.basename($path).'"');
header("Content-Transfer-Encoding: binary\n");

// Outputs the content of the file
readfile($path); 

exit();
?>