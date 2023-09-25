<?php
$id = $_GET['id'];
$q = $_GET['q'];
echo "<div id='id'>" . $id . "</div>";
echo "<div id='q'>" . $id . "</div>";
?>
<script>
    var id = document.getElementByid('id').innerHTML;
    var q = document.getElementByid('q').innerHTML;
    document.write('<br>' + id + '<br>' + q);
    window.open('https://d26g5bnklkwsh4.cloudfront.net/' +  +'/hls/720/main.m3u8')
</script>