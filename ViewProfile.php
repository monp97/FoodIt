<html>
<head>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/css/emoji.css" rel="stylesheet">

<style>
body{
  background-image: url("images/back_recipe.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: grey;
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
/*img{
    padding:20px;

  }*/

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.container{
  margin-top: 5%;
  background-color: grey;
  padding: 10px;
}
.title1{
  margin-left: 40%;
  margin-top: 10%;
  font-size: 50px;
  color:black;
  font-family: sans-serif;
  font-weight: bold;
}
.pro_image{
  padding:50px;
}
</style>
</head>
<body>

<h2 style="text-align:center;color:black">Profile</h2>


<div class="card">
  <img class="pro_image" src="images/profile.png" alt="John" style="width:50%">
  <?php
     include 'connection.php';
     $view=$_GET['id'];
     $val=$_GET['val'];
     $res=$con->query("SELECT  * FROM login_table WHERE username='$view'");
     $row=mysqli_fetch_array($res);
     $followers=$row['followers'];
     echo "<h1><b>$view</b></h1>
     <b><center>Followers</center></b>$followers

  <div style='margin: 24px 0;'>
    <a href='#'><i class='fa fa-dribbble'></i></a>
    <a href='#'><i class='fa fa-twitter'></i></a>
    <a href='#'><i class='fa fa-linkedin'></i></a>
    <a href='#'><i class='fa fa-facebook'></i></a>
  </div>";

  if($val==1)
   echo "<p><form action='update_followers.php?id=$view' method='post'><button type='submit'data-toggle='modal'>Unfollow</button></form></p>";
  else {
    echo "<p><form action='update_followers.php?id=$view' method='post'><button type='submit'data-toggle='modal'>Follow</button></form></p>";
  }
  echo "</div>
  <div class='title1' style='margin-left:30%;'>Recipes by &nbsp$view</div>
  <div class='container'>
  <div class='row'>";
  ?>
    <?php
            $view=$_GET['id'];
            $result = $con->query("SELECT * FROM posts where user='$view'"); //run query
            //check for errors
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc())
              {
                  $imgUrl =$row['image'];
                  $caption = $row['content'];
                  echo "
                  <div class='col-md-4'>
                    <div class='thumbnail'>
                      <img style='height:200px;max-width:250px;'  src='$imgUrl'>
                      <div class='caption'><p>$caption</p>
                        <img src='images/red.png' id='b' onclick='fill(this.id)''/>
                      </div>
                    </div>
                  </div>
                  ";
              }
            }
         ?>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="images/dish2.jpg">
      <div class="caption"><p>hello world!!!!</p>
        <img  src="images/red.png" id="b" onclick="fill(this.id)"/>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="images/dish3.jpeg">
      <div class="caption"><p>hello world!!!!</p><img src="images/red.png" id="c" onclick="fill(this.id)"/>
      </div>
    </div>
  </div>
</div>
</div>
</html>
