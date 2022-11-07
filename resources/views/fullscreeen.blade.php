<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #video {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <video src="assets/bigbuckbunny.mp4" id="video" controls="" width="480"></video>
    <script>
        window.addEventListener("load", startup, false);

        function startup() {
            // Get the reference to video
            const video = document.getElementById("video");

            // On pressing ENTER call toggleFullScreen method
            document.addEventListener("keypress", function(e) {
                if (e.key === 'Enter') {
                    toggleFullScreen(video);
                }
            }, false);
        }

        function toggleFullScreen(video) {
            if (!document.fullscreenElement) {
                // If the document is not in full screen mode
                // make the video full screen
                video.requestFullscreen();
            } else {
                // Otherwise exit the full screen
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }
    </script>
</body>

</html>
