<head>
  <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
      #video {
          width: 100%;
          height: 100%;
      }
  </style>
</head>

<body>
    <a href="explore.php">Go back.</a><br><br>
  <video id="video" class="video-js" controls preload="auto" 
  data-setup="{}">
    <?php 
      echo("<source src=\"videos/".$_SERVER['QUERY_STRING'])."\">";
    ?>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

  <script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
</body>