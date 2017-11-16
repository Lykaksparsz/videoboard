<html>
    <head>
        <title>
            videoboard
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>videoboard</h1><br>
        <a href="index.php">Go back.</a><br><br>
        <?php
            $configs = include("config.php");
            $dir = $configs["VidDir"];
            $SDir = array_slice(scandir($dir), 2);
            for($i = 0; $i < count($SDir); ++$i) {
                $Links = "view.php?".$SDir[$i];
                echo("<a href=\"".$Links."\">".$SDir[$i]."</a><br>");
            }
        ?>
    </body>
</html>