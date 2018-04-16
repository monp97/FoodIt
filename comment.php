<?php
include 'connection.php';
  if($_POST)
  {
    $comment=$_POST['comment'];
    $auth_name=$_SESSION['username'];
    $picid=$_POST['picid'];

    $con->query("INSERT into comment (comment,author,idpic) values ('$comment','$auth_name','$picid')");
    echo "done!";
  }
 ?>
