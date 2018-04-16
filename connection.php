<?php
  session_start();
  //header('location:login.php');
  $con=mysqli_connect('localhost','root');
  if(!$con)
  {
    echo "connection unsucessfull!!!";
  }
  mysqli_select_db($con,'food');
  ?>
