<html>
    <head>
        <title>
            videoboard
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>videoboard</h1><br>
        <a href="explore.php">Explore Videos</a><br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Video" name="submit">
        </form>
    </body>
</html>