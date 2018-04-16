<?php
 include 'connection.php';
 $name=$_GET['id'];
 //echo $name;
 $val=true;
 $res=$con->query(" SELECT * from login_table where username='$name' ");
 $row=mysqli_fetch_array($res);
 $followers=$row['followers'];
 $followers++;
 $res=$con->query(" UPDATE login_table SET followers='$followers' where username='$name' ");
 if($res)
 {
   //echo $followers;
   header("Location:ViewProfile.php?id=$name && val=$val");
 }
?>
