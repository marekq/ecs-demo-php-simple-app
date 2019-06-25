<!DOCTYPE html>
<html lang="en">

    <!-- get the ip address of the user visiting and generate a random background color -->
    <?php 
        $ip = file_get_contents('http://api.ipify.org/'); 
        $hx = '' . sprintf("%u", ip2long($ip)) . '';
        $co = '#' . substr(dechex($hx), -6) . '';
    ?>

    <head>
        <!-- refresh the page every three seconds -->

        <meta http-equiv="Refresh" content="3" charset="utf-8">
        <title>container demo page</title>

        <!-- setting some style properties -->

        <style>
            body {
                margin-top: 40px;
                background-color: <?php echo $co;?>
            }       
            div {
                text-align: center;
                align: center;
                background-color: white;
                width: 800px;
                font-family: monospace;
                font-size: 20px;
                color: #555;
                padding: 25px;
                border-radius: 30px;
            }
            p {
                text-align: left;
                font-size: 18px;
            }
        </style>

    </head>

        <!-- return the html of the page -->
        <body><center><div><br>
            <h2>
                <?php 
                    echo "The external IP address is " . $ip . ' ';
                ?>

            </h2>
            <p>The webpage autorefreshes every 3 seconds and connects to a random container behind the load balancer.</p> 
            <p>The background color of the pages changes depending on the container serving the request. 
            The container was created by <a href = 'https://twitter.com/marekq'>@marekq</a> and can be found on <a href = 'https://github.com/marekq/ecs-demo-php-simple-app'>GitHub</a> and <a href = 'https://hub.docker.com/r/marekq/container-demo'>DockerHub</a>.</p><br>
        </div>
    </center></body>

</html>
