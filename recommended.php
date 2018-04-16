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
    color:white;
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
  .time{
    position: relative;
    margin-right: 10px;
  }
  .share{
    position: relative;
    margin-left:10px;
  }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/comment.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

         <script>
        function fill(id)
        {
          var ob=(document.getElementById(id).src);
         if((ob.localeCompare('http://localhost/food/images/love.png')==0))
           document.getElementById(id).src='images/red.png';
          else {
            document.getElementById(id).src='images/love.png';
          }

  }
  </script>


  <div class="title">Recommended</div>
  <div class="container">
    <?php
      include 'connection.php';
        $result = $con->query("SELECT * FROM posts");
        //run query
        $i=0;
        $name=$_SESSION['username'];
        //check for errors
        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            if(strcmp($row['user'],$name)!=0)
            {
              $imgUrl =$row['image'];
              $caption = $row['content'];
              $user= $row['user'];
              $mysqltime=$row['time'];
              $time = strtotime($mysqltime);
              $time = date('d M Y', $time);
              $id=$row['id'];
              $comment=$con->query("SELECT * FROM comment WHERE idpic='$id'");

              echo "<div class='panel panel-default' style='width:50%;margin-left:20%;margin-top:30px;'>
                  <div class='panel-body' style='padding:10px;'><div class='posted' style='float:left'<pre style='border:none;background:none;'><b>Posted by user:</b>&nbsp$user</div>
                  <pre style='border:none;background:none;'></pre>
                  <div class='time' style='color:#38639C  ;'><b>Posted on:<b>&nbsp$time</div>
                  </div>
                 </div>
                <div class='row' style='margin-top:-20px;'>
                  <div class='col-md-6' style='margin-left:20%;'>
                    <div class='thumbnail' >
                      <div style='background-image:url(\"images/card_back.jpg\");background-size:cover;z-index:-1'>
                      <img style='height:300px;width:400px;margin-left:20%;' src='$imgUrl' >
                      </div>
                      <div class='caption'><p id='hey'>$caption</p>
                    ";

                    if($comment->num_rows>0)
                    {
                      while($row=$comment->fetch_assoc())
                      {
                        $com=$row['comment'];
                        $user=$row['author'];
                       echo "<div class='comments' name='typehere' id='comment'><pre style='border:none;background-color:#EBE5E5  '>$user :$com<br></pre></div>";

                      }
                    }

                       echo"<p>
                        <img src='images/love.png' id=$i onclick='fill(this.id)'/>
                          <iframe style='margin-top:10px;margin-left:-10px; ' src='https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ffooditcatering%2F%3Fhc_ref%3DARRMOUSCx03axWZDjJMP5XgtZJf51oRMomWYGdI8gnsR0MMb0f7KtNqHMeqjV_PKlBw%26fref%3Dnf&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId
                          width='100' height='80' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true'></iframe>
                        </p>
                      </div>
        <style type='text/css'>
          textarea.html-text-box {
          background-color:#ffffff;
          background-attachment:fixed;border-width:1;
          border-style:solid;
          border-color:#cccccc;
          font-family:Arial;
          font-size:14pt;color:#000000;
        }
        input.html-text-box {background-color:#ffffff;font-size:10pt;color:#000000;
        }
        </style>
    <form method='post' action='comment.php'>
    <input style='display:none' type='text' value=$id name='picid'>
    <textarea name='comment' cols='50' rows='3' class='html-text-box'>Comments here...</textarea>
    <br><input type='submit' value='Submit' class='html-text-box'>
    <input type='reset' value='Reset' class='html-text-box'>
    </form>
      </div>
          </div>
            </div>
              </div>";
              $i=$i+1;
            }
          }
        }
     ?>
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
