<html>
<head>

  <style>

  body{
    background-image: url("images/back_recipe.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: scroll;
    /*z-index: -1;*/
  }
  .title{
    font-size: 50px;
    margin-left: 40%;
    margin-right: 50%;
    font-family:inherit;
    font-weight:bold;
    color:black;
    margin-top:2%;
    padding:20px;
  }
  .address{
    height:330px;
    position:relative;
    margin-top:80px;
    width:100%;
    padding: 20px;
    background-color:black;
    color:white;
  }
  .label1{
    font-size: 30px;
    font-weight: bold;
  }
  .block1{
    width: 100px;
    position: relative;
    top:10px;
    font-size: 20px;
    font-weight: normal;
    /*z-index: 1000;*/
  }
  .icons{
    position:absolute;
    width:500px;
    margin-left:70%;
    padding:5px;
  }
  .icon{
    padding: 1px;
    height: 50px;
    width: 50px;
    float: left;
  }
  .footer{
    position:absolute;
    margin-top: 15px;
    padding:40px;
  }
  .img1{
    height:300px;
    width:300px;
  }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <script>
    function fill(id)
    {
      var ob=(document.getElementById(id).src);
    //  if((ob.localeCompare("file:///Applications/XAMPP/xamppfiles/htdocs/food/images/love.png")==0))
     if((ob.localeCompare("http://localhost/food/images/love.png")==0))
       document.getElementById(id).src="images/red.png";
      else {
        document.getElementById(id).src="images/love.png";
      }

    }
  </script>
  <div class='title' >Recipes</div>
  <div class='container'>
    <div class='row'>
  <?php

    include 'connection.php';

    $result=$con->query("SELECT * FROM admin");
    $i=1;
  while($row=$result->fetch_assoc())
  {
     $img=$row['pic'];
     $video=$row['video'];

    echo "

              <div class='col-md-4'>
                <div class='thumbnail'>
                  <a href='playdish.php?id=$video'>
                  <img src='$img'></a>
                  <div class='caption'><p id='hey'><b>Donuts.</b>-to make you loose your taste buds!</p>
                    <img src='images/love.png' id='$i' onclick='fill(this.id)'/>
                  </div>
                </div>

          </div>";
          $i=$i+1;
  }

   ?>
 </div>
</div>
<div class="address">
  <label class="label1">Office address</label>
  <div class="block1">I-143 alpha-2 Greater Noida,Uttar Pradesh,India</div>
  <div class="icons">
    <img  class="icon" src="images/tweet.png" height="10%" width="10%"></img>
    <img class="icon" src="images/fb.png" height="10%" width="10%"></img>
    <img class="icon" src="images/insta.png" height="10%" width="10%"></img>
 </div>
 <div class="footer">© [name of rightsholder or rightsholders] [publication year]: e.g.  © XYZ Press and contributors 2014</div>
</div>
</body>
</html>
