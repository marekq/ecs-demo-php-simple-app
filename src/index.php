<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Refresh" content="5">
        <meta charset="utf-8">
        <title>Fargate demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h2>
                    <?php 
                        $ip = file_get_contents('http://api.ipify.org/'); 
                        echo "The containers IP address is " . $ip;
                    ?>
                </h2>
                <p>This application is now running as a Fargate container. <br>
                The webpage autorefreshes every 5 seconds and connects to a random container behind the load balancer.</p><br>
            </div>
        </div>

        <script >function random_bg_color() {
            var x = Math.floor(Math.random() * 256);
            var y = Math.floor(Math.random() * 256);
            var z = Math.floor(Math.random() * 256);
            var bgColor = "rgb(" + x + "," + y + "," + z + ")";

            document.body.style.background = bgColor;
        }
        random_bg_color();
        </script>
    </body>

</html>
