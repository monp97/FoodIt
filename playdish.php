<html>
<head>
  <style>
  body{
    background-image: url("images/video_back.jpg");
  }
  iframe
  {
    margin-left:30%;
    margin-top: 5%;
  }
  h1{
    color: white;
    text-align: center;
    font-size: 50px;
    margin-top: 3%;
  }
  </style>
</head>
<body>

  <?php
   include 'connection.php';
   $link=$_GET['id'];
   echo "<h1>Video</h1>";
   echo "<iframe width='560' height='415' src=$link frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
   ?>
</body>
</html>
