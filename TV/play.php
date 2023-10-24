

<?php
if(isset($_GET['url'])){
    $url = $_POST['url'];

    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto Video</title>
</head>
<body>

<video id="myVideo" controls autoplay muted playsinline>
    <source src="your-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<script>
    // Auto fullscreen (Note: Not supported in all browsers)
    const video = document.getElementById('myVideo');
    video.requestFullscreen = video.requestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen || video.msRequestFullscreen;
    video.requestFullscreen();

    // Auto unmute (Auto audio on by default)
    video.muted = false;
</script>

</body>
</html>
<?php
}else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Url Video Player</title>
    </head>
    <body>
        <h1>Enter url To play</h1>
        <footer>Disclaimer: we Does not Host Any Content On Our Own We only Play Content From Url Provided By The User</footer>
    </body>
    </html>
    <?php
}
?>