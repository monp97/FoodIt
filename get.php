<?php
  include 'connection.php';

  $qry= "select * from posts ";


  echo "<table>";
  if($res= mysqli_query($con,$qry)){
//   if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_array($res)){
     echo "<tr><td>".$row['name']."</td></tr>";
     echo "Hello";
    }
//   }
  }
  echo "</table>";
 ?>
