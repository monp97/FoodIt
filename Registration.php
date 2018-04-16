<?php
  // session_start();
  // $con=mysqli_connect('localhost','root');
  // if(!$con)
  // {
  //   echo "connection unsucessfull!!!";
  // }
  //mysqli_select_db($con,'food');
  include 'connection.php';
  $name=$_POST['Username'];
  $address=$_POST['Address'];
  $pin=$_POST['Pin'];
  $password=$_POST['password'];
  $birthdate=$_POST['bday'];
 $result=$con->query("SELECT * from login_table where username = '$name'  AND date='$birthdate'");


  $num=mysqli_fetch_array($result);

  if($num>=1)
     {
      //  $_SESSION['username']=$name;
       header('location:divIt.html');
     }
   else {

       $con->query("insert into login_table (username,Address,Pin,date,password) values ('$name', '$address', '$pin','$birthdate','$password')");
        header('location:login.php');
   }

 ?>
