<?php
// msleep function by Diego Andrade
$configs = include("config.php");
function msleep($time)
{
    usleep($time * 1000000);
}
// Uploadz
$target_dir = $configs["VidDir"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$videoFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > $configs["VideoSizeLimit"]) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($videoFileType != "mp4" && $videoFileType != "avi" && $videoFileType != "mov"
&& $videoFileType != "webm" ) {
    echo "Sorry, only MP4, AVI, MOV & WEBM files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        msleep(1);
        header("Location: view.php?".basename( $_FILES["fileToUpload"]["name"]));
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>