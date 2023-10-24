

<?php
if(isset($_GET['url'])){
    $url = $_GET['url'];

    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto Video</title>
</head>
<body>

<video id="myVideo" width="100%" height="100%" controls autoplay muted playsinline>
    <source src="<?php echo $url; ?>" type="video/mp4">
    Your browser does not support the video tag.
</video>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Auto fullscreen (Note: Not supported in all browsers)
    const video = document.getElementById('myVideo');
    video.requestFullscreen = video.requestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen || video.msRequestFullscreen;
    video.requestFullscreen();

    // Auto unmute (Auto audio on by default)
    video.muted = false;
});


    video.addEventListener('click', function() {
        // Check if the video is paused
        if (video.paused) {
            // Play the video
            video.play();
            
            // Auto fullscreen (Note: Not supported in all browsers)
            const requestFullScreen = video.requestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen || video.msRequestFullscreen;
            if (requestFullScreen) {
                requestFullScreen.call(video);
            }
        } else {
            // If the video is already playing, clicking it will pause it
            video.pause();
        }
    });

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
        <footer>Disclaimer: We Does Not Host Any Content On Our Own We Only Play Content From Url Provided By The User</footer>
    </body>
    </html>
    <?php
}
?>