<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 body{
   background-image: url("images/back_recipe.jpg");
   background-repeat: no-repeat;
   background-size: cover;
 }
.card {
  position: relative;
  margin-left: 10%;
  margin-top: 10%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  float:left;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
#top1{

  font-size: 50px;
  font-weight: bold;
  margin-left: 37%;
  margin-top: 10%;
}
</style>
</head>
<body>
  <p id="top1">BLOGGERS</p>
<?php
  include 'connection.php';
 $result=$con->query("SELECT DISTINCT user FROM posts");

   while($row=mysqli_fetch_assoc($result))
   {
     $auth=$row['user'];
     $address=$con->query("SELECT * FROM login_table where username='$auth'");
     $add=mysqli_fetch_assoc($address);
     $ad=$add['Address'];
     $pin=$add['Pin'];
     $val=0;
     echo "
     <div class='card'>
       <img src='images/profile.png' alt='John' style='width:200px;height:200px;'>";
       echo "<h1>$auth</h1>";

       echo "<p class='title'>Blogger</p>
       <p><b>$ad</b></p>
       <p>Pincode:<b>$pin</b></p>
       <div style='margin: 24px 0;'>
         <a href='#'><i class='fa fa-dribbble'></i></a>
         <a href='#'><i class='fa fa-twitter'></i></a>
         <a href='#'><i class='fa fa-linkedin'></i></a>
         <a href='#'><i class='fa fa-facebook'></i></a>
      </div>
      <p><a href='ViewProfile.php?id=$auth && val=$val'><button>View Profile</button></a></p>
     </div>";
   }

?>

</body>
</html>
