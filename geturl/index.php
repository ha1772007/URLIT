<?php
$id = $_GET['id'];
$q = $_GET['q'];
echo "<div id='id'>" . $id . "</div>";
echo "<div id='q'>" . $q . "</div>";
?>
<script>
    var id = document.getElementById('id').innerHTML;
    var q = document.getElementById('q').innerHTML;
    window.open('https://d26g5bnklkwsh4.cloudfront.net/' + id + '/hls/' + q + '/main.m3u8', "_self");
    // 254c513c-8e1d-4043-9aae-7f35fa7a4ccc
    // 720
</script>