
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
     $name=$_SESSION['username'];
     $result=$con->query("SELECT * FROM login_table where username='$name' ");
     $row = mysqli_fetch_array($result);
     $followers=$row['followers'];
     echo "<h1><b>$name</b></h1>";
   echo "<p><b><center>Followers<center></b></p><p>$followers</p>";
    ?>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
 </div>
 <p><button data-toggle="modal" data-target="#myModal">Upload</button></p>
</div>
<div class="title1">Your Recipes</div>
<div class="container">
<div class="row">
    <?php
            $res=$_SESSION['username'];
            $result = $con->query("SELECT * FROM posts where user='$res'"); //run query
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">choose file</h4>
      </div>
        <form action="upload_blog.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
          <input type="file" name="file" accept="image/*"></input>
        <!-- <textarea  cols="4" class="text" type="text" placeholder="write something..." data-emojiable="true"></textarea> -->
      <p class="lead emoji-picker-container">
         <textarea  name="content" rows="5" type="text" class="form-control" placeholder="write something..." data-emojiable="true"></textarea>
      </p>
      <div class="form-group">
           <label for='sel1'>Select Cuisine</label>
             <select class='form-control' id='sel1' name='cuisine'>
                <option>Chinese</option>
               <option>Italian</option>
               <option>Indian</option>
               <option>Continental</option>
             </select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">upload</button>
          </div>
          </form>


    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="lib/js/config.js"></script>
   <script src="lib/js/util.js"></script>
   <script src="lib/js/jquery.emojiarea.js"></script>
   <script src="lib/js/emoji-picker.js"></script>
   <script>
     $(function() {
       // Initializes and creates emoji set from sprite sheet
       window.emojiPicker = new EmojiPicker({
         emojiable_selector: '[data-emojiable=true]',
         assetsPath: 'lib/img/',
         popupButtonClasses: 'fa fa-smile-o'
       });
       // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
       // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
       // It can be called as many times as necessary; previously converted input fields will not be converted again
       window.emojiPicker.discover();
     });
   </script>

</html>
