<?php
 include 'connection.php';
 $dir="uploads/";
 $name=$_SESSION['username'];
 $cuisine=$_POST['cuisine'];
 $time=date("Y-m-d h:i:sa");

 if(isset($_FILES['file'])){
   
   $image_up=basename($_FILES["file"]["name"]);
   $final=$dir . $image_up;
   if(move_uploaded_file($_FILES['file']["tmp_name"],$final))
   {
   $text=$_POST['content'];
   $con->query("insert into posts (image,content,cuisine,user,time) values ('$final','$text','$cuisine','$name','$time')");
    header('location:upload.php');
   }
   else {
     echo "not done!";
   }
}
else {
  echo "not set";
}
// if($_FILES["file"]["error"] == 0){
//     //File uploaded
//     echo "file up";



  //  header('location:login.php');
 ?>
