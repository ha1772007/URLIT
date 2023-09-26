<?php
$login = 'login-code-here';
$api_key = '3e85eaac132daee7b926a54de23811900f61e082';
$long_url = 'https://d26g5bnklkwsh4.cloudfront.net/254c513c-8e1d-4043-9aae-7f35fa7a4ccc/hls/720/main.m3u8';

$ch = curl_init('http://api.bitly.com/v3/shorten?login='.$login.'&apiKey='.$api_key.'&longUrl='.$long_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$res = json_decode($result, true);
echo $res['data']['url']; // bit.ly/2PcG3Fg
?>
