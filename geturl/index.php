<?php
$id = $_GET['id'];
$q = $_GET['q'];
echo "<div id='id'>" . $id . "</div>";
echo "<div id='q'>" . $id . "</div>";
?>
<script>
    var id = document.getElementById('id').innerHTML;
    var q = document.getElementById('q').innerHTML;
    document.write('<br>' + id + '<br>' + q);
</script>